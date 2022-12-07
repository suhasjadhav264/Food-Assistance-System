<?php 
class Auth extends CI_Controller {

	public function login(){

		if($_POST){
			$res = $this->db->get_where('admin', array('username' => $_POST['username'], 'password' => $_POST['password']));

			if($res->num_rows() == 1){
				$row = $res->row();
				$_SESSION['admin_id'] = true;

				redirect(base_url());
			} else {
				redirect(base_url().'Auth/login');
			}
		}

		$this->load->view('login');
	}

	public function logout() {
		unset($_SESSION['admin_id']);
		redirect(base_url());
	}

}


?>