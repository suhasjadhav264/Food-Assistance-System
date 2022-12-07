<?php 
class Uploadphoto extends CI_Controller {

  public function index() {

    $without_ext = explode('.', $_FILES['needy_pic']['name'])[0];
        $ext = explode('.', $_FILES['needy_pic']['name'])[1];

        $path_ = 'assets/food_given';
        $config['file_name']     = $without_ext."_";
        $config['upload_path']   = $path_;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 5000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('needy_pic')){
            $uploadData = $this->upload->data();

            $filename = $uploadData['file_name'];
        }
        else{ 
            //echo $this->upload->display_errors(); exit;
            // echo json_encode(array('error' => 1, 'message' => 'photo upload Error')); exit;

            $response = array(
                'error' => 1,
                'message' => $this->db->err_message()
            );

            echo json_encode($response); exit();
        }

        $data = array(
          'rest_id' => $_POST['rest_id'],
          'needy_id' => $_POST['needy_id'],
          'type' => $_POST['type'],
          'photo' => $filename
        );

        if($this->db->insert('food_given', $data)){
          $response = array(
            'error' => 0,
            'message' => 'Data Submitted'
          );
        } else {
          $response = array(
            'error' => 0,
            'message' => $this->db->err_message()
          );
        }

        echo json_encode($response);
  }
}

?>