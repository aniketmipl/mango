<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GroupTours extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search()
	{		
		
		$tour_name = $this->input->post('tour_name');	
		$travel_date = $this->input->post('tour_date');
		$travel_budget = $this->input->post('travel_budget');
		$data['api_result']=$this->call_api($tour_name,$travel_date,$travel_budget);
		$this->load->view('common/header');
		$this->load->view('search_result/view',$data);
		$this->load->view('common/footer');
	}

	public function call_api($tour_name,$travel_date,$travel_budget){

		if($tour_name !=""){$tour_name = $tour_name;} else{$tour_name=" ";}
		if($travel_date !=""){$travel_date = $travel_date;} else{$travel_date=" ";}
		if($travel_budget !=""){$travel_budget = $travel_budget;} else{$travel_budget=" ";}
		$api_url ="http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/getProductListBySectorForWebsite?Tourname=".$tour_name."&Traveldate=".$travel_date."&Travelbudget=".$travel_budget;
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
		return $decrypt_data->ProductList;

	}
}