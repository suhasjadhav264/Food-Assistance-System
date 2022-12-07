<?php 
class GetReports extends CI_Controller{

	public function index() {

		$rest_id = $_POST['rest_id'];
		$day = $_POST['type'];

		if($day == "today"){
			$f = " and SUBSTRING(created_at, 1, 10) = '".date('Y-m-d')."'";
		} elseif($day == "yesterday") {
			$f = " and SUBSTRING(created_at, 1, 10) = '".date('Y-m-d', strtotime("-1 days"))."'";
		} else {
			$f = "";
		}

		$sql = "SELECT a.*, b.needy_name, b.needy_photo from food_given a, needy b where a.needy_id = b.id and a.rest_id = '$rest_id'".$f;

		$res = $this->db->query($sql)->result();

		if(count($res) > 0){

			foreach($res as $r) {
				$data[] = array(
					
					'needy_name' => $r->needy_name,
					'NeedyPic' => "https://e59f-2409-4071-2213-1b6-a15d-62e5-34c5-9a64.in.ngrok.io/hungerNew/assets/profile_photo/".$r->needy_photo,
					'FoodType' => $r->type,
					'dateNtime' => $r->created_at
				);
			}

			$response = array(
				'error' => 0,
				'message' => "Data Found",
				'reports' => $data
			);
		} else {
			$response = array(
				'error' => 1,
				'message' => "No Data Found"
			);
		}

		echo json_encode($response);
	}

}
?>