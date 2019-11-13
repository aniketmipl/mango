<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tours extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

//GROUP INTERNATIONAL TOURS

	public function exotic_europe()
	{
		$product_id ='5';
		$product_code='E1';

		$data['api_result']=$this->call_api($product_id,$product_code);		
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/europe/exotic-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/europe/exotic-europe.jpg';
		$filter_data['slider_image'] = 'git/E1/exotic-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E1/exotic-europe.jpg';

		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";

		$head_data['title'] = "Exotic Europe Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function classical_europe()
	{
		$product_id ='6';
		$product_code='E2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/europe/classic-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/europe/classic-europe.jpg';
		$filter_data['slider_image'] = 'git/E2/classic-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E2/classic-europe.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Classical Europe Tour Package from Mumbai,Pune,India | Mango Holidays";

$head_data['sector'] = $filter_data['sector'];
$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function grand_europe()
	{
		$product_id ='7';
		$product_code='E5';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/europe/grand-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/europe/grand-europe.jpg';	
		$filter_data['slider_image'] = 'git/E5/grand-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E5/grand-europe.jpg';	
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Grand Europe Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);

		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
		$this->load->view('common/footer');
	}

		
	public function central_eastern_europe()
	{
		$product_id ='9';
		$product_code='E6';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/rest-of-europe/central-eastern-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/rest-of-europe/central-eastern-europe.jpg';
		$filter_data['slider_image'] = 'git/E6/central-eastern-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E6/central-eastern-europe.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Central Easter Europe Tour Package from Mumbai,Pune,India | Mango Holidays";


		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function scenic_scandinavia()
	{
		$product_id ='10';
		$product_code='E7';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/rest-of-europe/scenic-scandinavia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/rest-of-europe/scenic-scandinavia.jpg';
		$filter_data['slider_image'] = 'git/E7/scenic-scandinavia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E7/scenic-scandinavia.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Scenic Scandinavia Tour Package from Mumbai,Pune,India | Mango Holidays";


		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function highlights_of_europe()
	{
		$product_id ='26';
		$product_code='E9';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/E9/highlights-of-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E9/highlights-of-europe.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Highlights of Europe Tour Package from Mumbai,Pune,India | Mango Holidays";

$head_data['sector'] = $filter_data['sector'];
$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function glimpses_of_europe()
	{
		$product_id ='31';
		$product_code='E31';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/E31/glimpses-of-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E31/glimpses-of-europe.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Glimpses of Europe Tour Package from Mumbai,Pune,India | Mango Holidays";


		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
		$this->load->view('common/footer');
	}

	public function best_of_europe()
	{
		//$product_id ='8';
		//$product_code='E4';
		// $product_id ='32';
		// $product_code='E41';
		$product_id ='147';
		$product_code='BE';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/europe/best-of-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/europe/best-of-europe.jpg';	
		$filter_data['slider_image'] = 'git/BE/best-of-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/BE/best-of-europe.jpg';	
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		//$head_data['title'] = "Best Of Europe Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
		$this->load->view('common/footer');
	}

	
	public function stunning_europe(){

		$product_id ='33';
		$product_code='E51';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'git/E51/stunning-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E51/stunning-europe.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="GroupTours/group_asia";
		$head_data['title'] = "Stunning Europe Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');

	}

	public function mesmerising_europe()
	{
		$product_id ='34';
		$product_code='E42';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/rest-of-europe/central-eastern-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/rest-of-europe/central-eastern-europe.jpg';
		$filter_data['slider_image'] = 'git/E42/mesmerising-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E42/mesmerising-europe.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Mesmerising Europe Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	

	public function incredible_america()
	{
		$product_id ='18';
		$product_code='U1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];		
		// $filter_data['slider_image'] = 'images/tours/america/incredible-america-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/america/incredible-america.jpg';
		$filter_data['slider_image'] = 'git/U1/incredible-america-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/U1/incredible-america.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="GroupTours/group_america";
		$head_data['title'] = "Incredible America Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function east_coast_of_america()
	{
		$product_id ='19';
		$product_code='U2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];	
		// $filter_data['slider_image'] = 'images/tours/america/east-cost-america-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/america/east-coast-of-america.jpg';
		$filter_data['slider_image'] = 'git/U2/east-cost-america-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/U2/east-coast-of-america.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="GroupTours/group_america";
		$head_data['title'] = "East Coast of America Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function east_coast_of_america_with_orlando()
	{
		$product_id ='21';
		$product_code='U3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];		
		// $filter_data['slider_image'] = 'images/tours/america/east-coast-of-america-with-orlando-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/america/east-coast-of-america-with-orlando.jpg';
		$filter_data['slider_image'] = 'git/U3/east-coast-of-america-with-orlando-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/U3/east-coast-of-america-with-orlando.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="GroupTours/group_america";
		$head_data['title'] = "East Coast of America with Orlando Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function west_coast_of_america()
	{
		$product_id ='22';
		$product_code='U4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];	
		// $filter_data['slider_image'] = 'images/tours/america/west-coast-of-america-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/america/west-coast-of-america.jpg';
		$filter_data['slider_image'] = 'git/U4/west-coast-of-america-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/U4/west-coast-of-america.jpg';
		$head_data['title'] = "West Coast of America Tour Package from Mumbai,Pune,India | Mango Holidays";
		$filter_data['sector']="America";
		//$filter_data['sector_path']="GroupTours/group_america";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function south_african_safari()
	{
		$product_id ='17';
		$product_code='S1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'git/S1/south-african-safari-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/S1/south-african-safari.jpg';
		$filter_data['sector']="Africa";
		//$filter_data['sector_path']="GroupTours/group_africa";
		$head_data['title'] = "South Africa Safari Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function dazzling_dubai()
	{
		$product_id ='11';
		$product_code='D1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];	
		// $filter_data['slider_image'] = 'images/tours/dubai/dazzling-dubai-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/dubai/dazzling-dubai.jpg';
		$filter_data['slider_image'] = 'git/D1/dazzling-dubai-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/D1/dazzling-dubai.jpg';
		$filter_data['sector']="Dubai";
		//$filter_data['sector_path']="GroupTours/group_dubai";
		$head_data['title'] = "Dazzling Dubai Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}


	public function japan()
	{
		$product_id ='27';
		$product_code='J1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);		
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/japan/japan-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/japan/japan.jpg';
		$filter_data['slider_image'] = 'git/J1/japan-cherry-blossom-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/J1/japan-cherry-blossom.jpg';
		$filter_data['sector']="Japan";
		//$filter_data['sector_path']="GroupTours/group_japan";
		$head_data['title'] = "Japan Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function japan_with_alpine_route()
	{
		$product_id ='128';
		$product_code='J2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);		
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/japan/japan-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/japan/japan.jpg';
		$filter_data['slider_image'] = 'git/J2/japan-with-alpine-route-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/J2/japan-with-alpine-route.jpg';
		$filter_data['sector']="Japan";
		//$filter_data['sector_path']="GroupTours/group_japan";
		$head_data['title'] = "Japan Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}


	public function mauritius_masti()
	{
		$product_id ='14';
		$product_code='M1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/mauritius/mauritius-masti-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/mauritius/mauritius-masti.jpg';
		$filter_data['slider_image'] = 'git/M1/mauritius-masti-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/M1/mauritius-masti.jpg';
		$filter_data['sector']="Mauritius";
		//$filter_data['sector_path']="GroupTours/group_mauritius";
		$head_data['title'] = "Mauritius Masti Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function Australia_and_New_Zealand()
	{
		$product_id ='16';
		$product_code='A1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/australia-and-new-zeeland/new-zealand-&-australia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/australia-and-new-zeeland/new-zealand-&-australia.jpg';
		$filter_data['slider_image'] = 'git/A1/new-zealand-australia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/A1/new-zealand-australia.jpg';
		$filter_data['sector']="Australia and New Zealand";
		//$filter_data['sector_path']="GroupTours/group_australiaandnewzealand";
		$head_data['title'] = "Australia and New Zealand Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}


	

	public function south_east_asia(){

		$product_id ='15';
		$product_code='F1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'git/F1/south-east-asia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/F1/south-east-asia.jpg';
		$filter_data['sector']="South East Asia";
		//$filter_data['sector_path']="GroupTours/group_asia";
		$head_data['title'] = "South East Asia Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');

	}



//CUSTOMIZED INTERNATIONAL TOURS	
	public function greece1(){

		$product_id ='30';
		$product_code='GREECE/001';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'fit/GREECE-001/greece1-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GREECE-001/greece1.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/group_eurpoe";
		$head_data['title'] = "Greece Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');

	}

	public function new_zealand_discovery(){

		$product_id ='35';
		$product_code='NZ1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'fit/NZ1/new-zealand-discovery-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/NZ1/new-zealand-discovery.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/custom_australiaandnewzealand";
		$head_data['title'] = "New Zeeland Discovery Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');

	}


	public function south_africa_with_victoria_falls(){
		$product_id ='36';
		$product_code='SA1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SA1/south-africa-with-victoria-falls-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA1/south-africa-with-victoria-falls.jpg';
		$filter_data['sector']="Africa";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "South Afric with Victoria falls Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}


///CUSTOMIZED INDIA TOURS
	public function beautiful_andaman(){
		$product_id ='38';
		$product_code='AN1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AN1/beautiful-andaman-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AN1/beautiful-andaman.jpg';
		$filter_data['sector']="Andaman";
		//$filter_data['sector_path']="CustomizedTours/customized_andaman";
		$head_data['title'] = "Beautiful Andaman Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function stunning_andaman(){
		$product_id ='44';
		$product_code='AN2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AN2/stunning-andaman-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AN2/stunning-andaman.jpg';
		$filter_data['sector']="Andaman";
		//$filter_data['sector_path']="CustomizedTours/customized_andaman";
		$head_data['title'] = "Stunning Andaman Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function classical_tour_of_egypt(){
		$product_id ='40';
		$product_code='EG1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/EG1/Classical-Tour-of-Egypt-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/EG1/Classical-Tour-of-Egypt.jpg';
		$filter_data['sector']="Africa";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "CLASSICAL TOUR OF EGYPT Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}


	public function splendors_of_madhya_pradesh(){
		$product_id ='43';
		$product_code='MP1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MP1/splendors-of-madhya-pradesh-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MP1/Splendors-of-Madhya-Pradesh.jpg';
		$filter_data['sector']="Madhya Pradesh";
		//$filter_data['sector_path']="CustomizedTours/customized_madhya_pradesh";
		$head_data['title'] = "Splendors of Madhya Pradesh Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function historic_madhya_pradesh(){
		$product_id ='45';
		$product_code='MP2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MP2/historic-madhya-pradesh-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MP2/Historic-Madhya-Pradesh.jpg';
		$filter_data['sector']="Madhya Pradesh";
		//$filter_data['sector_path']="CustomizedTours/customized_madhya_pradesh";
		$head_data['title'] = "Historic Madhya Pradesh Tour Package from Mumbai,Pune,India | Mango Holidays";

		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	} 
	public function marvellous_mauritius(){
		$product_id ='47';
		$product_code='MR1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MR1/marvellous-mauritius-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MR1/marvellous-mauritius.jpg';
		$filter_data['sector']="Mauritius";
		//$filter_data['sector_path']="CustomizedTours/custom_africa";
		$head_data['title'] = "MARVELLOUS MAURITIUS Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	} 

	public function mauritius_break(){
		$product_id ='48';
		$product_code='MR2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MR2/mauritius-break-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MR2/mauritius-break.jpg';
		$filter_data['sector']="Mauritius";
		//$filter_data['sector_path']="CustomizedTours/custom_africa";
		$head_data['title'] = "Mauritius Break Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function blissful_bali(){
		$product_id ='3';
		$product_code='BA';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/BA/blissful-bali-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/BA/blissful-bali.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "BLISSFUL BALI Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function best_of_china(){
		$product_id ='28';
		$product_code='CH';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/CH/best-of-china-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/CH/best-of-china.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "BEST OF CHINA Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function stunning_singapore(){
		$product_id ='37';
		$product_code='SI';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SI/stunning-singapore-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SI/stunning-singapore.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "STUNNING SINGAPORE Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function discover_russia(){
		$product_id ='39';
		$product_code='RU1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/RU1/discover-russia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/RU1/discover-russia.jpg';
		$filter_data['sector']="Russia";
		//$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "Discover Russia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_russia(){
		$product_id ='41';
		$product_code='RU2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/RU2/best-of-russia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/RU2/best-of-russia.jpg';
		$filter_data['sector']="Russia";
		//$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "Best of Russia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function kuala_lumpur(){
		$product_id ='42';
		$product_code='MY1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MY1/kuala-lumpur-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MY1/kuala-lumpur.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "kuala Lumpur Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function amazing_china(){
		$product_id ='50';
		$product_code='CH1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/CH1/amazing-china-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/CH1/amazing-china.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "Amazing China Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function amazing_new_zealand(){
		$product_id ='58';
		$product_code='NZ2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/NZ2/amazing-new-zealand-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/NZ2/amazing-new-zealand.jpg';
		$filter_data['sector']="Australia and New Zealand";
		//$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "Amazing New Zealand Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function seychelles_magic(){
		$product_id ='59';
		$product_code='SE1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SE1/Seychelles-Magic-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SE1/Seychelles-Magic.jpg';
		$filter_data['sector']="Africa";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Seychelles Magic Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function spectacular_south_africa(){
		$product_id ='66';
		$product_code='SA2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SA2/Spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/Spectacular-south-africa.jpg';
		$filter_data['sector']="Africa";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Spectacular South Africa Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_thailand(){
		$product_id ='67';
		$product_code='TH1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/TH1/best-of-thailand-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TH1/best-of-thailand.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "Best of Thailand Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function bangkok_pattaya(){
		$product_id ='68';
		$product_code='TH2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/TH2/bangkok-pattaya-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TH2/bangkok-pattaya.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "Bangkok Pattaya Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function mesmerising_nepal(){
		$product_id ='54';
		$product_code='NL1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/NL1/mesmerising-nepal-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/NL1/Mesmerising-Nepal.jpg';
		$filter_data['sector']="Nepal";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Mesmerising Nepal Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function scenic_nepal(){
		$product_id ='55';
		$product_code='NL2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/NL2/scenic-nepal-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/NL2/Scenic-Nepal.jpg';
		$filter_data['sector']="Nepal";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Nepal Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function temple_tour_of_nepal(){
		$product_id ='60';
		$product_code='NL3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/NL3/temple-tour-of-nepal-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/NL3/Temple-Tour-of-Nepal.jpg';
		$filter_data['sector']="Nepal";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Temple Tour of Nepal Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function beautiful_srilanka(){
		$product_id ='62';
		$product_code='SL1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SL1/Beautiful-Sri-Lanka-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SL1/Beautiful-Sri-Lanka.jpg';
		$filter_data['sector']="Sri Lanka";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Beautiful Sri-Lanka Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function scenic_srilanka(){
		$product_id ='64';
		$product_code='SL2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SL2/scenic-sri-lanka-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SL2/scenic-sri-lanka.jpg';
		$filter_data['sector']="Sri Lanka";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Sri-Lanka Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function short_break_kerala(){
		$product_id ='52';
		$product_code='KE1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KE1/short-break-kerala-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KE1/Short-Break-Kerala.jpg';
		$filter_data['sector']="Kerala";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Short Break Kerala Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function scenic_kerala(){
		$product_id ='57';
		$product_code='KE2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KE2/scenic-kerala-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KE2/scenic-kerala.jpg';
		$filter_data['sector']="Kerala";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Kerala Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function attractive_kerala(){
		$product_id ='61';
		$product_code='KE3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KE3/attractive-kerala-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KE3/attractive-Kerala.jpg';
		$filter_data['sector']="Kerala";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Attractive Kerala Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function enchanting_kerala_with_kanyakumari(){
		$product_id ='63';
		$product_code='KE4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KE4/enchanting-kerala-with-kanyakumari-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KE4/Enchanting-Kerala-with-Kanyakumari.jpg';
		$filter_data['sector']="Kerala";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Enchanting Kerala with Kanyakumari Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function maldives_fun_island(){
		$product_id ='51';
		$product_code='ML1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/ML1/Maldives-Fun-Island-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/ML1/Maldives-Fun-Island.jpg';
		$filter_data['sector']="Maldives";
		//$filter_data['sector_path']="CustomizedTours/customized_maldives";
		$head_data['title'] = "Maldives Fun Island Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function maldives_paradise_island_resort(){
		$product_id ='53';
		$product_code='ML2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/ML2/Maldives-Paradise-Island-Resort-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/ML2/Maldives-Paradise-Island-Resort.jpg';
		$filter_data['sector']="Maldives";
		//$filter_data['sector_path']="CustomizedTours/customized_maldives";
		$head_data['title'] = "Maldives Paradise Island Resort Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function maldives_olhuveli(){
		$product_id ='56';
		$product_code='ML3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/ML3/Maldives-Olhuveli-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/ML3/Maldives-Olhuveli.jpg';
		$filter_data['sector']="Maldives";
		//$filter_data['sector_path']="CustomizedTours/customized_maldives";
		$head_data['title'] = "MALDIVES OLHUVELI Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function best_of_rajasthan(){
		$product_id ='70';
		$product_code='RA1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/RA1/best-of-rajasthan-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/RA1/best-of-rajasthan.jpg';
		$filter_data['sector']="Rajasthan";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Best Of Rajasthan Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function glimpse_of_rajasthan(){
		$product_id ='71';
		$product_code='RA2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/RA2/glimpse-of-rajasthan-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/RA2/Glimpse-of-Rajasthan.jpg';
		$filter_data['sector']="Rajasthan";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Glimpse of Rajasthan Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function gujarat_wildlife_and_pilgrimage(){
		$product_id ='69';
		$product_code='GJ1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/GJ1/gujarat-wildlife-and-pilgrimage-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GJ1/gujarat-wildlife-and-pilgrimage.jpg';
		$filter_data['sector']="Gujarat";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Gujarat Wildlife Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_turkey(){
		$product_id ='73';
		$product_code='TU1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/TU1/best-of-turkey-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TU1/best-of-turkey.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF TURKEY Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function turkish_delight(){
		$product_id ='74';
		$product_code='TU2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/TU2/turkish-delight-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TU2/turkish-delight.jpg';
		$filter_data['sector']="Europe";
		////$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "TURKISH DELIGHT Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function azerbaijan_baku(){
		$product_id ='75';
		$product_code='AZ1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AZ1/azerbaijan-baku-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AZ1/azerbaijan-baku.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Azerbaijan Baku Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function dubai_abu_dhabi_luxury(){
		$product_id ='72';
		$product_code='DX1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/DX1/dubai-abu-dhabi-luxury-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/DX1/dubai-abu-dhabi-luxury.jpg';
		$filter_data['sector']="Dubai";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Dubai Luxury Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function swiss_paris(){

		$product_id ='77';
		$product_code='EU1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/EU1/swiss-paris-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/EU1/swiss-paris.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Swiss Paris Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_italy(){

		$product_id ='115';
		$product_code='IT1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/IT1/best-of-italy-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/IT1/best-of-italy.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Best of Italy Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function discover_croatia(){

		$product_id ='118';
		$product_code='CR1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/CR1/discover-croatia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/CR1/discover-croatia.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Discover Croatia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function greek_voyage(){

		$product_id ='78';
		$product_code='GR1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/GR1/greek-voyage-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GR1/greek-voyage.jpg';
		$filter_data['sector']="Greece";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Greek Voyage Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function best_of_greece(){

		$product_id ='113';
		$product_code='GR2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/GR2/best-of-greece-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GR2/best-of-greece.jpg';
		$filter_data['sector']="Greece";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Best Of Greece Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function hong_kong(){

		$product_id ='76';
		$product_code='HK1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/HK1/hong-kong-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/HK1/hong-kong.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hong Kong Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function heaven_on_earth(){

		$product_id ='79';
		$product_code='JK1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/JK1/heaven-on-earth-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JK1/Heaven-on-Earth.jpg';
		$filter_data['sector']="Kashmir";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Heaven on Earth Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function singapore_fully_loaded(){

		$product_id ='37';
		$product_code='SI';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SI/singapore-fully-loaded-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SI/singapore-fully-loaded.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SINGAPORE Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function vietnam(){

		$product_id ='104';
		$product_code='VI1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/VI1/vietnam-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/VI1/vietnam.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "VIETNAM Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
		public function basic_singapore(){

		$product_id ='107';
		$product_code='SI2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SI2/basic-singapore-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SI2/basic-singapore.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BASIC SINGAPORE Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function basic_singapore_with_universal_studios(){

		$product_id ='109';
		$product_code='SI3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SI3/basic-singapore-with-universal-studios-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SI3/basic-singapore-with-universal-studios.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Universal Studio Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function best_of_dubai(){

		$product_id ='101';
		$product_code='DX2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/DX2/best-of-dubai-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/DX2/best-of-dubai.jpg';
		$filter_data['sector']="Dubai";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Best of Dubai Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
			$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function blissful_bali_honeymoon_special(){

		$product_id ='3';
		$product_code='BA';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/BA/blissful-bali-honeymoon-special-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/BA/blissful-bali-honeymoon-special.jpg';
		$filter_data['sector']="Bali";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BLISSFUL BALI Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}	
	public function best_of_bali(){

		$product_id ='94';
		$product_code='BA1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/BA1/best-of-bali-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/BA1/best-of-bali.jpg';
		$filter_data['sector']="Bali";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF BALI Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function best_of_sri_lanka(){

		$product_id ='103';
		$product_code='SL3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SL3/best-of-sri-lanka-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SL3/best-of-sri-lanka.jpg';
		$filter_data['sector']="Sri Lanka";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF SRI LANKA Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function cairo(){

		$product_id ='99';
		$product_code='EG2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/EG2/cairo-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/EG2/cairo.jpg';
		$filter_data['sector']="Egypt";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "CAIRO Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function egypt_jewels(){

		$product_id ='100';
		$product_code='EG3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/EG3/egypt-jewels-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/EG3/Egypt-jewels.jpg';
		$filter_data['sector']="Egypt";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "EGYPT JEWELS Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function spanish_delight(){

		$product_id ='85';
		$product_code='SP1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SP1/Spanish-delight-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SP1/Spanish-delight.jpg';
		$filter_data['sector']="Spain";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SPANISH DELIGHT Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function best_of_spain(){

		$product_id ='102';
		$product_code='SP2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SP2/best-of-spain-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SP2/best-of-spain.jpg';
		$filter_data['sector']="Spain";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF SPAIN Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function jewels_of_spain(){

		$product_id ='122';
		$product_code='SP3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SP3/jewel-of-spain-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SP3/jewel-of-spain.jpg';
		$filter_data['sector']="Spain";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF SPAIN Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function british_columbia_canada(){

		$product_id ='110';
		$product_code='CA1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] ='fit/CA1/british-columbia-canada-banner.jpg';
		$filter_data['slider_mobile_image'] ='fit/CA1/british-columbia-canada.jpg';
		$filter_data['sector']="Canada";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BRITISH COLUMBIA Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function canadian_rockies(){

		$product_id ='111';
		$product_code='CA2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/CA2/canadian-rockies-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/CA2/canadian-rockies.jpg';
		$filter_data['sector']="Canada";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "CANADIAN ROCKIES Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function eastern_canada(){

		$product_id ='112';
		$product_code='CA3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/CA3/eastern-canada-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/CA3/eastern-canada.jpg';
		$filter_data['sector']="Canada";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "EASTERN CANADA Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	
	public function hills_and_meadows(){

		$product_id ='84';
		$product_code='JK2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/JK2/Hills-and-Meadows-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JK2/Hills-and-Meadows.jpg';
		$filter_data['sector']="Kashmir";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hills and Meadows Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function kashmir_with_vaishnodevi(){

		$product_id ='87';
		$product_code='JK3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/JK3/kashmir-with-vaishnodevi-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JK3/Kashmir-with-Vaishnodevi.jpg';
		$filter_data['sector']="Kashmir";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Kashmir with Vaishnodevi Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function mesmerizing_south_karnataka(){

		$product_id ='88';
		$product_code='KA1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KA1/mesmerizing-south-karnataka-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KA1/mesmerizing-south-karnataka.jpg';
		$filter_data['sector']="Karnataka";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Mesmerizing South Karnataka Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function mysore_ooty_kodai(){

		$product_id ='89';
		$product_code='KA2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KA2/mysore-ooty-kodai-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KA2/Mysore-Ooty-Kodai.jpg';
		$filter_data['sector']="Karnataka";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Mysore Ooty Kodai Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function quick_break_karnataka(){

		$product_id ='92';
		$product_code='KA3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/KA3/quick-break-karnataka-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/KA3/Quick-Break-Karnataka.jpg';
		$filter_data['sector']="Karnataka";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Quick Break Karnataka Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function classic_himachal(){

		$product_id ='93';
		$product_code='HP1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/HP1/classic-himachal-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/HP1/classic-himachal.jpg';
		$filter_data['sector']="Himachal";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Classic Himachal Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function devbhumi_himachal(){

		$product_id ='95';
		$product_code='HP2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/HP2/devbhumi-himachal-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/HP2/devbhumi-himachal.jpg';
		$filter_data['sector']="Himachal";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Devbhumi Himachal Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function scenic_madhya_pradesh(){

		$product_id ='49';
		$product_code='MP3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MP3/scenic-madhya-pradesh-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MP3/Scenic-Madhya-pradesh.jpg';
		$filter_data['sector']="Madhya Pradesh";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Madhya Pradesh Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function highlights_of_tamil_nadu(){

		$product_id ='81';
		$product_code='TN1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/TN1/highlights-of-tamil-nadu-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TN1/Highlights-of-Tamil-Nadu.jpg';
		$filter_data['sector']="Tamil Nadu";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Highlights of Tamil Nadu Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function goa(){

		$product_id ='82';
		$product_code='GO1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/GO1/goa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GO1/goa.jpg';
		$filter_data['sector']="Goa";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Goa Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function darjeeling_pelling_gangtok(){

		$product_id ='108';
		$product_code='NE1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/NE1/darjeeling-pelling-gangtok-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/NE1/Darjeeling-Pelling-Gangtok.jpg';
		$filter_data['sector']="North East";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Darjeeling Pelling Gangtok Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function hyderabad_with_ramoji(){

		$product_id ='90';
		$product_code='AP1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AP1/hyderabad-with-ramoji-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AP1/hyderabad-with-ramoji.jpg';
		$filter_data['sector']="Andhra Pradesh";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hyderabad with Ramoji Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function hyderabad_with_srisailyam(){

		$product_id ='91';
		$product_code='AP2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AP2/hyderabad-with-srisailyam-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AP2/hyderabad-with-srisailyam.jpg';
		$filter_data['sector']="Andhra Pradesh";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hyderabad with Srisailyam Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function unique_orissa(){

		$product_id ='96';
		$product_code='OD1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/OD1/unique-orissa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/OD1/Unique-Orissa.jpg';
		$filter_data['sector']="Orissa";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Unique Orissa Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function eastern_europe(){

		$product_id ='97';
		$product_code='E62';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'git/E62/eastern-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E62/eastern-europe.jpg';
		$filter_data['sector']="Eastern Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Eastern Europe Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}		
	public function eastern_europe_express(){

		$product_id ='98';
		$product_code='E61';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'git/E61/eastern-europe-express-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E61/eastern-europe-express.jpg';
		$filter_data['sector']="Eastern Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Eastern Europe Express Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function enchanting_vietnam_cambodia(){
		$product_id ='116';
		$product_code='VC';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'git/VC/enchanting-vietnam-cambodia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/VC/enchanting-vietnam-cambodia.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Vietnam Cambodia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function jordan(){
		$product_id ='80';
		$product_code='JO1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/JO1/jordan-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JO1/jordan.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Jordan Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function jordan_diamonds(){
		$product_id ='105';
		$product_code='JO2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/JO2/jordan-diamonds-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JO2/jordan-diamonds.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Jordan Diamonds Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function petra_moon_valley(){
		$product_id ='106';
		$product_code='JO3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/JO3/petra-moon-valley-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JO3/petra-moon-valley.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Petra Moon Valley Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function bangkok_chiang_mai(){
		$product_id ='119';
		$product_code='TH3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/TH3/bangkok-chiang-mai-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TH3/bangkok-chiang-mai.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Bangkok Chiang Mai Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function kuala_lumpur_penang(){
		$product_id ='126';
		$product_code='MY2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/MY2/kuala-lumpur-penang-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MY2/kuala-lumpur-penang.jpg';
		$filter_data['sector']="Asia";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Kuala Lumpur Penang Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function australia_on_budget(){
		$product_id ='121';
		$product_code='AU2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AU2/australia-on-budget-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AU2/australia-on-budget.jpg';
		$filter_data['sector']="Australia and New Zealand";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Australia on Budget Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_australia(){
		$product_id ='124';
		$product_code='AU3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AU3/best-of-australia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AU3/best-of-australia.jpg';
		$filter_data['sector']="Australia and New Zealand";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function luxury_dubai_abu_dhabi_loaded(){
		$product_id ='72';
		$product_code='DX1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/DX1/dubai-abu-dhabi-luxury-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/DX1/dubai-abu-dhabi-luxury.jpg';
		$filter_data['sector']="Dubai";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function dubai_abu_dhabi_basic(){
		$product_id ='123';
		$product_code='DX3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/DX3/dubai-abu-dhabi-basic-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/DX3/dubai-abu-dhabi-basic.jpg';
		$filter_data['sector']="Dubai";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_southafrica(){
		$product_id ='17';
		$product_code='S1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/S1/best-of-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/S1/best-of-south-africa.jpg"';
		$filter_data['sector']="Dubai";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function luxurious_bali(){
		$product_id ='120';
		$product_code='BA2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/BA2/luxurious-bali-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/BA2/luxurious-bali.jpg';
		$filter_data['sector']="Bali";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function best_of_morocco(){
		$product_id ='129';
		$product_code='MO1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'fit/MO1/best-of-morocco-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'fit/MO1/best-of-morocco.jpg';
		$filter_data['slider_image'] = 'fit/MO1/best-of-morocco-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/MO1/best-of-morocco.jpg';
		$filter_data['sector']="Morocco";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function all_of_singapore(){
		$product_id ='130';
		$product_code='F3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/F3/all-of-singapore-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/F3/all-of-singapore.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Asia";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function spain_and_portugal(){
		$product_id ='131';
		$product_code='E10';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/E10/spain-and-portugal-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E10/spain-and-portugal.jpg';
		$filter_data['sector']="Europe";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function classical_greece(){
		$product_id ='132';
		$product_code='GR3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/GR3/classical-greece-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GR3/classical-greece.jpg';
		$filter_data['sector']="Greece";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function swiss_delights(){

		$product_id ='133';
		$product_code='E11';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/E10/swiss-delights-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E10/swiss-delights.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Eastern Europe Express Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function greek_golden_age(){
		$product_id ='136';
		$product_code='GR4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/GR4/greek-golden-age-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GR4/greek-golden-age.jpg';
		$filter_data['sector']="Greece";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function luxury_hong_kong_macau(){
		$product_id ='137';
		$product_code='HK2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/HK2/luxury-hong-kong-macau-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/HK2/luxury-hong-kong-macau.jpg';
		$filter_data['sector']="Hong Kong";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function classic_jordan(){
		$product_id ='114';
		$product_code='JO4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/JO4/classic-jordan-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/JO4/classic-jordan.jpg';
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Jordan";
		// //$filter_data['sector_path']="CustomizedTours/customized_africa";
		// $head_data['title'] = "Luxury Dubai Loaded Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function gujarat_special(){
		$product_id ='25';
		$product_code='GJ';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'git/GJ/gujarat-special-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'git/GJ/gujarat-special.jpg';
		$filter_data['slider_image'] = 'images/default-banner.jpg';
		$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="India";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function statue_of_unity_tour(){
		$product_id ='138';
		$product_code='GJ2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AN1/Statue_of_unity_banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AN1/Statue_of_unity.jpg';
		$filter_data['sector']="Gujarat";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Gujarat Wildlife Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function bali_with_gili_island(){

		$product_id ='143';
		$product_code='BA3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'fit/BA3/bali-with-gili-island-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/BA3/bali-with-gili-island.jpg';
		$filter_data['sector']="Bali";
		//$filter_data['sector_path']="CustomizedTours/group_eurpoe";
		//$head_data['title'] = "Greece Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');

	}
	public function spain_with_morocco(){

		$product_id ='142';
		$product_code='SP4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'fit/SP4/spain-with-morocco-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SP4/spain-with-morocco.jpg';
		$filter_data['sector']="Spain";
		//$filter_data['sector_path']="CustomizedTours/group_eurpoe";
		//$head_data['title'] = "Greece Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function greece_turkey(){

		$product_id ='135';
		$product_code='E13';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/E13/greece-turkey-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E13/greece-turkey.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Eastern Europe Express Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function russian_deight(){

		$product_id ='141';
		$product_code='E14';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'git/E13/russian-deights-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E13russian-deights.jpg';
		$filter_data['sector']="Europe";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Eastern Europe Express Tour Package from Mumbai,Pune,India|Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	public function hong_kong_macau(){

		$product_id ='144';
		$product_code='HK3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/asia/south-east-asia-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/asia/south-east-asia.jpg';
		$filter_data['slider_image'] = 'fit/HK3/hong-kong-macau-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/HK3/hong-kong-macau.jpg';
		$filter_data['sector']="Bali";
		//$filter_data['sector_path']="CustomizedTours/group_eurpoe";
		//$head_data['title'] = "Greece Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');

	}
	public function egypt_culture_and_beach_tour(){
		$product_id ='145';
		$product_code='EG4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/EG4/egypt-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/EG4/egypt-culture-and-beach-tour.jpg';
		$filter_data['sector']="Egypt";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function all_of_azerbaijan(){
		$product_id ='146';
		$product_code='AZ2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/AZ2/azerbaijan-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/AZ2/all-of-azerbaijan.jpg';
		$filter_data['sector']="Azerbaijan";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function dubai_basic(){
		$product_id ='148';
		$product_code='DX4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/DX4/dubai-basic-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/DX4/dubai-basic.jpg';
		$filter_data['sector']="Dubai";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function american_dream(){
		$product_id ='150';
		$product_code='US1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US1/american-dreams-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US1/american-dreams.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function east_coast(){
		$product_id ='151';
		$product_code='US2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US2/east-coast-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US2/east-coast.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function west_coast(){
		$product_id ='152';
		$product_code='US3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US3/west-coast-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US3/west-coast.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function yellowstone_rushmore(){
		$product_id ='153';
		$product_code='US4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US4/yellowstone-rushmore-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US4/yellowstone-rushmore.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function spectacular_brazil(){
		$product_id ='154';
		$product_code='US5';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US5/spectacular-brazil-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US5/spectacular-brazil.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function highlights_of_argentina(){
		$product_id ='155';
		$product_code='US6';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US6/highlights-of-argentina-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US6/highlights-of-argentina.jpg';
		$filter_data['sector']="America";
		//$filter_data['sector_path']="CustomizedTours/customized_africa";
		//$head_data['title'] = "Best of Australia Tour Package from Mumbai,Pune,India | Mango Holidays";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function all_of_south_america(){
		$product_id ='156';
		$product_code='US7';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/US7/all-of-south-america-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/US7/all-of-south-america.jpg';
		$filter_data['sector']="America";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function golden_triangle(){
		$product_id ='65';
		$product_code='DE1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/default-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['slider_image'] = 'fit/DE1/golden-triangle-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/DE1/golden-triangle.jpg';
		$filter_data['sector']="America";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function athens_istanbul(){
		$product_id ='157';
		$product_code='GR5';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		 $filter_data['slider_image'] = 'fit/GR5/athens-istanbul-banner.jpg';
		 $filter_data['slider_mobile_image'] = 'fit/GR5/athens-istanbul.jpg';
		$filter_data['sector']="Greece";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function all_of_china(){
		$product_id ='158';
		$product_code='CH2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/CH2/all-of-china-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/CH2/all-of-china.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Asia";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function classic_turkey(){
		$product_id ='159';
		$product_code='TU3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/TU3/classic-turkey-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TU3/classic-turkey.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Turkey";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function golden_triangle_of_turkey(){
		$product_id ='160';
		$product_code='TU4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/TU4/golden-triangle-of-turkey-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TU4/golden-triangle-of-turkey.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Turkey";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function istanbul_cappadocia(){
		$product_id ='161';
		$product_code='TU5';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/TU5/istanbul-cappadocia-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/TU5/istanbul-cappadocia.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Turkey";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function iconic_iceland(){
		$product_id ='162';
		$product_code='IC1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/IC1/iconic-iceland-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/IC1/iconic-iceland.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Turkey";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function irresistible_iceland(){
		$product_id ='163';
		$product_code='IC2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/IC2/irresistible-iceland-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/IC2/irresistible-iceland.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Turkey";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function all_of_iceland(){
		$product_id ='164';
		$product_code='IC3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['slider_image'] = 'fit/IC3/all-of-iceland-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/IC3/all-of-iceland.jpg';
		//$filter_data['slider_image'] = 'images/default-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Turkey";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function athens_santorini(){
		$product_id ='166';
		$product_code='GR6';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'fit/GR5/athens-santorini-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'fit/GR5/athens-santorini.jpg';
		$filter_data['slider_image'] = 'images/default-banner.jpg';
		$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Greece";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function explore_vietnam(){
		$product_id ='165';
		$product_code='VI2';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'fit/VI2/explore-vietnam-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'fit/VI2/explore-vietnam.jpg';
		$filter_data['slider_image'] = 'images/default-banner.jpg';
		$filter_data['slider_mobile_image'] = 'images/default-tour.jpg';
		$filter_data['sector']="Greece";
		$head_data['sector'] = $filter_data['sector'];
		$head_data['travel_type'] = $filter_data['complete_data']->TravelType;
		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	
	public function mpdf(){
		//load mPDF library
		@$this->load->library('m_pdf');
		//load mPDF library
		// $this->data['description']=$this->official_copies;
		 //now pass the data //
		// $html=$this->load->view('pdf_output',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
 	 
		//this the the PDF filename that user will get to download
		$pdfFilePath ="download/MangoHolidays-".date('d-m-Y')."-".time().".pdf";

		//actually, you can pass mPDF parameter on this load() function
		@$pdf = $this->m_pdf->load();

		$header = "<div style='display:block; width :100%; padding-top:22px; margin-top:20px;'><div style='border:1px solid #ccc; border-bottom:0;'><div align='right'><h2 style='display:inline-block; vertical-align:middle; text-align:left; padding-left:30px;'><b style='margin-top:50px'><br/>".$_POST['sector']."</b><img style='display:inline-block; float:right; width:150px;' src='".base_url()."assets/images/Mango-Holidays-logo.png'></h2></div></div></div>";

		@$pdf->SetHTMLHeader($header); //Add header
		@$pdf->SetHTMLFooter('<div style="display:block; width :100%; padding-bottom:20px; margin-bottom:20px;"><div style="border:1px solid #ccc; border-top:0;"><hr style="color:#ccc; padding-top:0px; margin-top:0;"/><p align="center" style="padding-bottom:3%; color:#969494;">Experience of a Lifetime!</p></div></div>');
		 $pdf->AddPage('P', // L - landscape, P - portrait 
        '', '', '', '',
        5, // margin_left
        5, // margin right
       35, // margin top
       25, // margin bottom
        0, // margin header
        0); // margin footer
		
		//generate the PDF!

		@$pdf->WriteHTML($_POST['data'],2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		@$pdf->Output($pdfFilePath, "F");
		
		echo  $pdfFilePath;
	}

	public function call_api($product_id,$product_code){
		$api_url ="https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/getProductForWebsite?ProductID=".$product_id."&ProductCode=".$product_code;
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
		curl_setopt($ch, CURLOPT_TIMEOUT, 86400);
		curl_setopt($ch, CURLOPT_LOW_SPEED_LIMIT, 10240);
		curl_setopt($ch, CURLOPT_LOW_SPEED_TIME, 60);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$return = curl_exec($ch);
		curl_close($ch);
		$decrypt_data = json_decode($return);
		$result['complete_data'] = $decrypt_data;
		return $result;

	}

}
