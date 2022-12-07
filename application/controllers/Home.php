<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
    	parent:: __construct();
    }
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		// $this->load->view('view_Needy');
	    $this->load->view('layout/footer');
	} 
	 
}
