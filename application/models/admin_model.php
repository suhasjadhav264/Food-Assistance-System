<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class admin_model extends CI_Model
 {
 	
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model','admin');
    } 
    function add_needy()
    {

        $without_ext = explode('.', $_FILES['profile_pic']['name'])[0];
        $ext = explode('.', $_FILES['profile_pic']['name'])[1];

        $path_ = 'assets/profile_photo';
        $config['file_name']     = $without_ext."_";
        $config['upload_path']   = $path_;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 500;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('profile_pic')){
            $uploadData = $this->upload->data();

            $filename = $uploadData['file_name'];
        }
        else{ 
            print_r(array("error" => $this->upload->display_errors())); exit;
        }

        $data = array(
            'needy_name' => $_POST['needy_name'],
            'needy_address' => $_POST['needy_address'],
            'needy_gender' => $_POST['needy_gender'],
            'needy_age' => $_POST['needy_age'],
            'aadhaar' => $_POST['needy_aadhaar'],
            'city' => $_POST['needy_city'],
            'pincode' => $_POST['needy_pincode'],
            'needy_photo' => $filename
            );
        $result = $this->db->insert('needy', $data);

        if($result)
        {
            return 200;
        }
        else
        {
            return "Failed";
        }
    }

   public function get_needy() {
     return $this->db->get('needy')->result();
   } 


   function add_restaurant()
    {

        $data = array(
            'res_name' => $_POST['res_name'],
            'res_address' => $_POST['res_address'],
            'res_phone' => $_POST['res_phone'],
            'res_city' => $_POST['res_city'],
            'res_email' => $_POST['res_email'],
            'username' => $_POST['res_username'],
            'password' => $_POST['res_password']
            );
        $result = $this->db->insert('restaurant', $data);

        if($result)
        {
            return 200;
        }
        else
        {
            return "Failed";
        }
    }

    public function get_restaurant() {
     return $this->db->get('restaurant')->result();
   } 

   public function delete_rest($id){
    $this->db->where('id',$id);
    $this->db->delete("restaurant");
   }

   public function delete_needy($id){
    $this->db->where('id',$id);
    $this->db->delete("needy");

    redirect(base_url().'Needy_master/view_needy');
   }
 } 
?>
