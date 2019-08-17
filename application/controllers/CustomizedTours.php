<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomizedTours extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	/*public function group_africa()
	{
		$sector ='Africa'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Africa Cutomized Tour| Mango Holidays";
		$data['group_images'] = array(  'group1' =>'images/tours/europe/best-of-europe.jpg',
										'group2' =>'images/tours/europe/classic-europe.jpg',
										'group3' =>'images/tours/europe/exotic-eurpoe.jpg');
		$data['sector_name']=$sector;
		$data['gt_image'] = 'images/tours/africa/main.jpg';

		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}*/

	public function customized_europe()
	{
		$sector ='Europe'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Europe Customized Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_australiaandnewzealand()
	{
		$sector ='Australia and New Zealand'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "NEW ZEALAND DISCOVERY Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_africa()
	{
		$sector ='Africa'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "SOUTH AFRICA WITH VICTORIA FALLS Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_andaman()
	{
		$sector ='Andaman'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "SOUTH AFRICA WITH VICTORIA FALLS Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_asia()
	{
		$sector ='Asia'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "BLISSFUL BALI Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_madhya_pradesh()
	{
		$sector ='Madhya Pradesh'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Splendors of Madhya Pradesh Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_mauritius()
	{
		$sector ='Mauritius'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Mauritius Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	// public function customized_dubia()
	// {
	// 	$sector ='Dubai'; //for Api

	// 	$data['api_result']=$this->call_api($sector);
	// 	$head_data['title'] = "Dubai Tour| Mango Holidays";
	// 	$data['sector_name']=$sector;
		
	// 	$this->load->view('common/header',$head_data);
	// 	$this->load->view('customized_tours/view',$data);
	// 	$this->load->view('common/footer');
	// }
	public function customized_dubai()
	{
		$sector ='Dubai'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Dubai Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_japan()
	{
		$sector ='Japan'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Dubai Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_scandinavia()
	{
		$sector ='Scandinavia'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Scandinavia Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_maldives()
	{
		$sector ='Maldives'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Maldives Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_gujarat()
	{
		$sector ='Gujarat'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Gujarat Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_hyderabad()
	{
		$sector ='Hyderabad'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Hyderabad Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_kashmir()
	{
		$sector ='Kashmir'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Kashmir Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_kerala()
	{
		$sector ='Kerala'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Kerala Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_nepal()
	{
		$sector ='Nepal'; //for Api

		$data['api_result']=$this->call_api($sector);
		$head_data['title'] = "Nepal Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	

	public function call_api($sector){

		$sector= str_replace ( ' ', '%20', $sector);
		$api_url ="http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/getProductListBySectorForWebsite?SectorName=$sector";
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
