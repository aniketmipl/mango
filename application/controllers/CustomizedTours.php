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
		//$head_data['title'] = "Africa Cutomized Tour| Mango Holidays";
		$data['group_images'] = array(  'group1' =>'images/tours/europe/best-of-europe.jpg',
										'group2' =>'images/tours/europe/classic-europe.jpg',
										'group3' =>'images/tours/europe/exotic-eurpoe.jpg');
		$data['sector_name']=$sector;
		$data['gt_image'] = 'images/tours/africa/main.jpg';

		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}*/

	public function customized_europe()
	{
		$sector ='Europe'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Europe Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_australiaandnewzealand()
	{
		$sector ='Australia and New Zealand'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Australia and New Zealand Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_africa()
	{
		$sector ='Africa'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized South Africa Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_andaman()
	{
		$sector ='Andaman'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Andaman Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_asia()
	{
		$sector ='Asia'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Asia Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_madhya_pradesh()
	{
		$sector ='Madhya Pradesh'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Madhya Pradesh Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_mauritius()
	{
		$sector ='Mauritius'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Mauritius Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	
	public function customized_dubai()
	{
		$sector ='Dubai'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Dubai Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_japan()
	{
		$sector ='Japan'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Japan Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_scandinavia()
	{
		$sector ='Scandinavia'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Scandinavia Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_maldives()
	{
		$sector ='Maldives'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Maldives Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_gujarat()
	{
		$sector ='Gujarat'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Gujarat Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_hyderabad()
	{
		$sector ='Hyderabad'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Hyderabad Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_kashmir()
	{
		$sector ='Kashmir'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Kashmir Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_kerala()
	{
		$sector ='Kerala'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Kerala Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_nepal()
	{
		$sector ='Nepal'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Nepal Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_srilanka()
	{
		$sector ='Sri Lanka'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized Sri Lanka Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_rajasthan()
	{
		$sector ='Rajasthan'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Customized $sector Tour from Mumbai,Pune,India| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_tamil_nadu()
	{
		$sector ='Tamil Nadu'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Tamil Nadu Tour | Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_goa()
	{
		$sector ='Goa'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Goa Tour | Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_north_east()
	{
		$sector ='North East'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "North East Tour | Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_karnataka()
	{
		$sector ='karnataka'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "karnataka Tour | Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	} 
	public function customized_andhra_pradesh()
	{
		$sector ='Andhra Pradesh'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "North East Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_bali()
	{
		$sector ='Bali'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Bali Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_egypt()
	{
		$sector ='Egypt'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Egypt Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_himachal()
	{
		$sector ='Himachal'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Himachal Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function customized_orissa()
	{
		$sector ='Orissa'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Orissa Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_turkey()
	{
		$sector ='Turkey'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Turkey Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_azerbaijan()
	{
		$sector ='Azerbaijan'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Azerbaijan Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_spain()
	{
		$sector ='Spain'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Spain Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_russia()
	{
		$sector ='Russia'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Russia Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
$head_data['travel_type'] = 'FIT';
$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_greece()
	{
		$sector ='Greece'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Greece Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	public function customized_canada()
	{
		$sector ='Canada'; //for Api

		$data['api_result']=$this->call_api($sector);
		//$head_data['title'] = "Canada Tour| Mango Holidays";
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	
		public function customized_jordan()
	{
		$sector ='Jordan'; //for Api

		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_hong_kong()
	{
		$sector ='Hong Kong'; //for Api

		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
		public function customized_morocco()
	{
		$sector ='Morocco'; //for Api

		$data['api_result']=$this->call_api($sector);
		$data['sector_name']=$sector;
		
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = 'FIT';
		$this->load->view('common/header',$head_data);
		$this->load->view('customized_tours/view',$data);
		$this->load->view('common/footer');
	}
	
	

	public function call_api($sector){

		$sector= str_replace ( ' ', '%20', $sector);
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
