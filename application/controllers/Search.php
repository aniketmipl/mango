<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search_result()
	{		
		$tour_name = "$this->input->post('tour_name')";
		$travel_type = "FIT";	
		$sector_name= "Hong Kong";	
		$product_id = 137;
		//$product_id = $this->input->post('product_id');	
		//$sector_name = $this->input->post('sector_name');	
		// $tour_type = $this->input->post('tour_type');		
		$data['api_result']=$this->call_api($product_id,$travel_type);		
		//$data['tour_name']=$tour_name;
		// $data['product_id']=$product_id;
		$data['sector_name']=$sector_name;
		$data['travel_type']=$travel_type;
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['sector']=$data['sector_name'];
		$filter_data['travel_type']=$data['travel_type'];
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = $data['travel_type'];
		$head_data['title'] = "Search Result | Mango Holidays";
		$this->load->view('common/header',$head_data);
		if($travel_type == "GIT"){
			$this->load->view('search_result/search_view',$data);
		}
		else if($travel_type == "FIT"){
			$this->load->view('search_result/search_view_fit',$data);
		}	
		else{
			$this->load->view('search_result/search_view_org',$data);
		}	
		$this->load->view('common/footer');
	}

	// public function call_api($tour_name,$product_id,$sector_name,$tour_type){
	public function call_api($product_id,$travel_type){		
		// $api_url = "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/getProductForWebsite?ProductID=".$product_id;
		$api_url = "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/getProductForWebsite?ProductId=".$product_id."&TravelType=".$travel_type;		
		// ."&SectorName=".$sector_name."&TravelType=".$tour_type."&ProductList=".$tour_name
		//."ProductList=".$tour_name
		echo $api_url;
		$ch = curl_init($api_url);
		$username = "mhwebsite";
		$password = "mango";
		$headers = array(
		    'Content-Type:application/json',
		    'UserName:'.$username,
		    'Password:'.$password
		);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 86400);
		curl_setopt($ch, CURLOPT_LOW_SPEED_LIMIT, 10240);
		curl_setopt($ch, CURLOPT_LOW_SPEED_TIME, 60);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$return = curl_exec($ch);
		curl_close($ch);
		$decrypt_data = json_decode($return);
		$result['complete_data'] = $decrypt_data;
		return $result;
		//echo json_encode($result);
		//return $decrypt_data->ProductList;
	}
}
