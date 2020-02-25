<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GroupTours extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function group_africa()
	{
		$sector ='Africa'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Africa Group Tour| Mango Holidays";
		$data['sector_name']=$sector;
		// $data['gt_image'] = 'images/tours/africa/main.jpg';
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_asia()
	{
		$sector ='Asia'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Africa Group Tour| Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/asia/main.jpg';

		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
        $this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	
	public function group_america()
	{
		$sector ='America';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "America Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/america/main.jpg';

		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'GIT';
$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function group_dubai()
	{
		$sector ='Dubai';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Dubai Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/dubai/main.jpg';

		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'GIT';
$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}


	public function group_europe()
	{
		$sector ='Europe';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Europe  Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/europe/main.jpg';

		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function group_japan()
	{
		$sector ='Japan';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Japan Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/japan/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function group_mauritius()
	{
		$sector ='Mauritius';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Mauritius Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/mauritius/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	

	public function group_australiaandnewzealand()
	{
		$sector ='Australia and New Zealand';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Australia and Newzealand Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/australia-and-new-zeeland/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function group_rest_of_europe()
	{
		$sector ='Rest of Europe';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Rest of Europe Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_eastern_europe()
	{
		$sector ='Eastern Europe';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Eastern Europe Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_scandinavia()
	{
		$sector ='Scandinavia';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Scandinavia Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	
	public function group_srilanka()
	{
		$sector ='Sri Lanka';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Scandinavia Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	/*public function group_india()
	{
		$sector ='India';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Scandinavia Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}*/
	public function group_ladakh()
	{
		$sector ='Ladakh';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_india_ladakh()
	{
		$sector ='Ladakh';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	 
	//  public function group_sikkimdarjeeling()
	// {
	// 	$sector ='Sikkim Darjeeling';
	// 	$data['api_result']=$this->call_api($sector);
	// 	$data['sector_name']=$sector;
	// 	$head_data['sector'] = $data['sector_name'];
	// 	$head_data['travel_type'] = 'GIT';
	// 	$this->load->view('common/header',$head_data);
	// 	$this->load->view('group_tours/view',$data);
	// 	$this->load->view('common/footer');
	// }
	public function group_india_sikkimdarjeeling()
	{
		$sector ='Sikkim Darjeeling';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}	
	public function group_nepal()
	{
		$sector ='Nepal';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Scandinavia Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_india_nepal()
	{
		$sector ='Nepal';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_india_chardham()
	{
		$sector ='Chardham';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_bhutan()
	{
		$sector ='Bhutan';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Scandinavia Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_india_bhutan()
	{
		$sector ='Bhutan';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}	

	public function group_himachal()
	{
		$sector ='Himachal';
		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function group_egypt()
	{
		$sector ='EGYPT';
		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Eastern Europe Group Tour from Mumbai,Pune,India|Mango Holidays";
		$data['sector_name']=$sector;
		//$data['gt_image'] = 'images/tours/rest-of-europe/main.jpg';
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'GIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}


	public function call_api($sector){

		$sector= str_replace (' ', '%20', $sector);
		$api_url ="https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/getProductListBySectorForWebsite?SectorName=$sector";
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
