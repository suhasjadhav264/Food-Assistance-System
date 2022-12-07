<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Apimodel', 'api');
	}


	public function index() {

		$res = $this->db->get_where('restaurant', array('username' => $_POST['username'], 'password' => $_POST['password']));

		if($res->num_rows() == 1){

			$row = $res->row();

			$userData = array(
				'id' => $row->id,
				'name' => $row->res_name,
				'address' => $row->res_address,
				'mobile' => $row->res_phone,
				'city' => $row->res_city,
				'email' => $row->res_email,
				'username' => $row->username
			);

			$response = array(
				'error' => 0,
				'message' => 'User found',
				'user' => $userData
			);

		} else {
			$response = array(
				'error' => 1,
				'message' => 'User not found'
			);
		}

		echo json_encode($response);

	}

}

?>