<?php 
class Reports extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$_SESSION['admin_id']){
			redirect(base_url().'Auth/login');
		}
	}

	public function not_paid() {

		$sql = "SELECT a.*, b.needy_name, c.res_name from food_given a, needy b, restaurant c where a.needy_id = b.id and a.rest_id = c.id and a.payout = 'Not Paid'";

		$data['reports'] = $this->db->query($sql)->result();
		$data['type'] = 'not_paid';
		$data['title'] = 'Not Paid List';

		$this->load->view('layout/header');
		$this->load->view('reports', $data);
		$this->load->view('layout/footer');
	}

	public function accept($id){
		$this->db->where('id', $id);

		$this->db->update('food_given', array('payout' => 'Paid'));

		$this->session->set_flashdata('SUCC_MSG', "Accepted");
		redirect(base_url()."/Reports/not_paid");
	}

	public function reject($id){
		$this->db->where('id', $id);

		$this->db->update('food_given', array('payout' => 'Rejected'));

		$this->session->set_flashdata('SUCC_MSG', "Rejected");
		redirect(base_url()."/Reports/not_paid");
	}

	public function paid() {

		$sql = "SELECT a.*, b.needy_name, c.res_name from food_given a, needy b, restaurant c where a.needy_id = b.id and a.rest_id = c.id and a.payout = 'Paid'";

		$data['reports'] = $this->db->query($sql)->result();
		$data['type'] = 'paid';
		$data['title'] = 'Paid List';


		$this->load->view('layout/header');
		$this->load->view('reports', $data);
		$this->load->view('layout/footer');
	}

	public function rejected() {

		$sql = "SELECT a.*, b.needy_name, c.res_name from food_given a, needy b, restaurant c where a.needy_id = b.id and a.rest_id = c.id and a.payout = 'Rejected'";

		$data['reports'] = $this->db->query($sql)->result();
		$data['type'] = 'paid';
		$data['title'] = 'Rejected List';

		$this->load->view('layout/header');
		$this->load->view('reports', $data);
		$this->load->view('layout/footer');
	}

	public function betweenDateReport() {

		// $sql = "SELECT a.*, b.needy_name, c.res_name from food_given a, needy b, restaurant c where a.needy_id = b.id and a.rest_id = c.id and SUBSTRING(a.created_at, 1, 10) between '$date1' and ";

		// $data['reports'] = $this->db->query($sql)->result();
		// $data['type'] = 'paid';
		// $data['title'] = 'Rejected List';

		// $this->load->view('layout/header');
		// $this->load->view('reports', $data);
		// $this->load->view('layout/footer');
	}

	public function add_donation() {

		if($_POST) {
			$data = array(
				'amount' => $_POST['amount'],
				'donated_by' => $_POST['donor'],
				'donated_through' => $_POST['donation_through'],
				'donated_date' => $_POST['d_date']
			);

			$this->db->insert('donation', $data);

			$this->session->set_flashdata('SUCC_MSG', "Rejected");
			redirect(base_url()."Reports/add_donation");

		}

		$this->load->view('layout/header');
		$this->load->view('add_donation');
		$this->load->view('layout/footer');
	}

	public function view_donation(){
		$data['donation_list'] = $this->db->get('donation')->result();

		$this->load->view('layout/header');
		$this->load->view('view_donation', $data);
		$this->load->view('layout/footer');
	}

	public function delete_donation($id) {

		$this->db->where('id', $id);
		$this->db->delete('donation');

		$this->session->set_flashdata('SUCC_MSG', "Donation is Deleted");
		redirect(base_url().'Reports/view_donation');

	}

}

?>