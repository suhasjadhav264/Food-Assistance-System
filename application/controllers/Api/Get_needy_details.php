<?php 
class Get_needy_details extends CI_Controller{

	public function index() {

		$needy_id = $_POST['needy_id'];

		$query = $this->db->get_where('needy', array('id' => $needy_id));

		$currentTime = strtotime(date('H:i:s'));

		if ( $currentTime >= strtotime(date('08:00:00')) && $currentTime <= strtotime(date('12:00:00')) ) {
		  $type = 'Tiffin';
		}
		else if( $currentTime >= strtotime(date('12:10:00')) && $currentTime <= strtotime(date('19:00:00')) ) {
			$type = 'Lunch';
		} else if( $currentTime >= strtotime(date('19:10:00')) && $currentTime <= strtotime(date('23:10:00')) ) {
			$type = 'Dinner';
		} else {
			echo json_encode(
				array(
					'error' => 1,
					'message' => "Currently unavailable"
				)
			);

			exit;
		}

		$today = date('Y-m-d');
		$sql = "SELECT * from food_given where needy_id = '$needy_id' and SUBSTRING(created_at, 1, 10) = '$today' and type = '$type'";

		$duplicate = $this->db->query($sql);

		if($duplicate->num_rows() > 0){
			echo json_encode(
				array(
					'error' => 1,
					'message' => "Food Already Given"
				)
			); exit;
		}



		if($query->num_rows() == 1){

			// $res = $this->db->get_where('')

			$row = $query->row();

			$needy_data = array(
				'name' => $row->needy_name,
				'age' => $row->needy_age,
				'city' => $row->city,
				'pic' => "https://e59f-2409-4071-2213-1b6-a15d-62e5-34c5-9a64.in.ngrok.io/hungerNew/assets/profile_photo/".$row->needy_photo,
				'type' => $type
			);


			$response = array(
				'error' => 0,
				'message' => 'Needy Found',
				'needy_data' => $needy_data
			);

		} else {
			$response = array(
				'error' => 1,
				'message' => 'No Needy Found'
			);
		}

		echo json_encode($response);
	}

}
?>