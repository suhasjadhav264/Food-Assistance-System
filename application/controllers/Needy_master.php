<?php
 defined ('BASEPATH') or exit('No direct script not allowed');

class Needy_master extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$_SESSION['admin_id']){
			redirect(base_url().'Auth/login');
		}

		$this->load->model('admin_model','admin');
	}

	// public function index() { 
	// 	$this->load->view('layout/header');
	// 	$this->load->view('view_Needy' );
	// 	$this->load->view('layout/footer');
	// }

	public function add_needy()
	{
		if (isset($_POST['submit'])) 
		{
			$res = $this->admin->add_needy();

			if ($res == 200)
		    {
				$this->session->set_flashdata('SUCC_MSG', 'Registered');
				redirect(base_url().'Needy_master/add_needy');
			}
			else
			{
				$this->session->set_flashdata('ERROR_MSG', $res);
				redirect(base_url().'Needy_master/add_needy');
			}
		}

		$this->load->view('layout/header');
		$this->load->view('view_Needy' );
		$this->load->view('layout/footer');
	}

	public function view_needy(){
		$data['needy'] = $this->admin->get_needy();

		$this->load->view('layout/header');
		$this->load->view('needy', $data );
		$this->load->view('layout/footer');
	}

	public function add_restaurant()
	{
		if (isset($_POST['submit'])) 
		{
			$res = $this->admin->add_restaurant();

			if ($res == 200)
		    {
				$this->session->set_flashdata('SUCC_MSG', 'Registered');
				redirect(base_url().'Needy_master/add_restaurant');
			}
			else
			{
				$this->session->set_flashdata('ERROR_MSG', $res);
				redirect(base_url().'Needy_master/add_restaurant');
			}
		}

		$this->load->view('layout/header');
		$this->load->view('add_restaurant' );
		$this->load->view('layout/footer');
	}

	public function view_restaurant(){
		$data['restaurant'] = $this->admin->get_restaurant();

		$this->load->view('layout/header');
		$this->load->view('view_restaurant', $data );
		$this->load->view('layout/footer');
	}

	public function delete_rest(){

        $id = $this->uri->segment(3);
        $this->admin->delete_rest($id);
        redirect(base_url()."Needy_master/delete");

        }

     public function delete()
     {
        $this->view_restaurant();
     }

     public function delete_needy($id){

        // $id = $this->uri->segment(3);
        $this->admin->delete_needy($id);
        redirect(base_url()."Needy_master/delete_n");

        }

     public function delete_n()
     {
        $this->view_needy();
     }

     public function edit_rest($id) {

     	if($_POST){

     		$data = array(
     			'res_name' =>       $_POST['res_name'],
     			'res_address' =>    $_POST['res_address'],         
     			         
     			'res_phone' =>      $_POST['res_phone'],          
     			'res_city' =>       $_POST['res_city'],           
     			'res_email' =>      $_POST['res_email'],           
     			'username' =>       $_POST['res_username']       
     		);

     		$this->db->where('id', $_POST['id']);
     		if($this->db->update('restaurant', $data)) {
     			$this->session->set_flashdata('SUCC_MSG', 'Updated');
				redirect(base_url().'Needy_master/edit_rest/'.$_POST['id']);
     		} else {
     			$this->session->set_flashdata('ERROR_MSG', 'Something went wrong');
				redirect(base_url().'Needy_master/edit_rest'.$_POST['id']);
     		}

     	}


     	$data['resData'] = $this->db->get_where('restaurant', array('id' => $id))->row();

     		$this->load->view('layout/header');
			$this->load->view('edit_rest', $data);
			$this->load->view('layout/footer');
     }

     public function edit_needy($id) {

     		if($_POST){

	     		$data = array(
	     			'needy_name' =>       $_POST['needy_name'],
	     			'needy_address' =>    $_POST['needy_address'],         
	     			         
	     			'aadhaar' =>      $_POST['needy_aadhaar'],          
	     			'needy_age' =>       $_POST['needy_age'],           
	     			'city' =>      $_POST['needy_city'],           
	     			'pincode' =>       $_POST['needy_pincode'],
	     			'needy_gender' => $_POST['needy_gender']     
	     		);

	     		$this->db->where('id', $id);
	     		if($this->db->update('needy', $data)) {
	     			$this->session->set_flashdata('SUCC_MSG', 'Updated');
					redirect(base_url().'Needy_master/edit_needy/'.$id);
	     		} else {
	     			$this->session->set_flashdata('ERROR_MSG', 'Something went wrong');
					redirect(base_url().'Needy_master/edit_needy'.$id);
	     		}

	     	}


     		$data['needyData'] = $this->db->get_where('needy', array('id' => $id))->row();

     		$this->load->view('layout/header');
			$this->load->view('edit_needy', $data);
			$this->load->view('layout/footer');
     }
}
 

   
?>