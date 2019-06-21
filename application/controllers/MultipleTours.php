<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MultipleTours extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function group_europe()
	{
		$sector ='Europe';

		$data['api_result']=$this->call_api($sector);
		// $filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		// $filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		// $filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		// $filter_data['Days']= $data['api_result']['Days'];
		// $filter_data['Nights']= $data['api_result']['Nights'];
		// $filter_data['slider_image'] = 'images/portfolio/1.jpg';
		// $filter_data['Inclusions']= $data['api_result']['Inclusions'];
		// $filter_data['Exclusions']= $data['api_result']['Exclusions'];

		$this->load->view('common/header');
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function call_api($sector){
		$api_url ="http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/getProductListBySectorForWebsite?SectorName=".$sector;
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
		$return = curl_exec($ch);
		curl_close($ch);
		$decrypt_data = json_decode($return);
		return $decrypt_data->ProductList;

	}

}
