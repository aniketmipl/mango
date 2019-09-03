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
		$filter_data['sector_path']="GroupTours/group_europe";

		$head_data['title'] = "Europe Group Tour Package from India Exotic Europe | Mango Holidays";
		
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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";

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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";

		$this->load->view('common/header');
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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Rest Of Europe Group Tour - Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Scenic Scandinavia Group Tour - Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Highlights Europe Group Tour - Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";

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
		$product_id ='32';
		$product_code='E41';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/europe/best-of-europe-banner.jpg';
		// $filter_data['slider_mobile_image'] = 'images/tours/europe/best-of-europe.jpg';	
		$filter_data['slider_image'] = 'git/E41/best-of-europe-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/E41/best-of-europe.jpg';	
		$filter_data['sector']="Europe";
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Best Of Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";

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
		$filter_data['sector_path']="GroupTours/group_asia";
		$head_data['title'] = "Stunning Europe Group Tour Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_europe";
		$head_data['title'] = "Mesmerising Europe Group Tour - Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_america";
		$head_data['title'] = "Incredible America |Tour Package from Pune  Mumbai | Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_america";
		$head_data['title'] = "East Coast America Tour - Mango Holidays- call 8380039503";

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
		$filter_data['sector_path']="GroupTours/group_america";
		$head_data['title'] = "East Coast America Tour - Mango Holidays- call 8380039503";

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
		$head_data['title'] = "West Coast America - Mango Holidays - Best Group Tour - call 838003503";
		$filter_data['sector']="America";
		$filter_data['sector_path']="GroupTours/group_america";

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
		$filter_data['sector_path']="GroupTours/group_africa";
		$head_data['title'] = "South Africa Tour Holiday Packages from Mumbai Pune Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_dubai";
		$head_data['title'] = "Dubai Group Tour with Abu Dhabi - Mango Holidays";

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
		$filter_data['slider_image'] = 'git/J1/japan-banner.jpg';
		$filter_data['slider_mobile_image'] = 'git/J1/japan.jpg';
		$filter_data['sector']="Japan";
		$filter_data['sector_path']="GroupTours/group_japan";
		$head_data['title'] = "Japan Group Tour - Japanese Discovery - 5 N / 6 D Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_mauritius";
		$head_data['title'] = "Mauritius Group Tour - Mango Holidays";

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
		$filter_data['sector']="Australia and New Zeeland";
		$filter_data['sector_path']="GroupTours/group_australiaandnewzealand";
		$head_data['title'] = "Australia and New Zeeland Group Tour - Mango Holidays";

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
		$filter_data['sector_path']="GroupTours/group_asia";
		$head_data['title'] = "South East Asia Tour Singapore Thailand Malaysia | Mango Holidays";

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
		$filter_data['sector_path']="CustomizedTours/group_eurpoe";
		$head_data['title'] = "Greece Tour | Mango Holidays";

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
		$filter_data['sector_path']="CustomizedTours/custom_australiaandnewzealand";
		$head_data['title'] = "Australia and New Zealand Tour | Mango Holidays";

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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "South Africa Tour Holiday Packages from Mumbai Pune Mango Holidays";

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
		$filter_data['sector_path']="CustomizedTours/customized_andaman";
		$head_data['title'] = "BEAUTIFUL ANDAMAN";

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
		$filter_data['sector_path']="CustomizedTours/customized_andaman";
		$head_data['title'] = "Stunning Andaman Tour";

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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "CLASSICAL TOUR OF EGYPT";

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
		$filter_data['slider_image'] = 'fit/SA1/south-africa-with-victoria-falls-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA1/south-africa-with-victoria-falls.jpg';
		$filter_data['sector']="Madhya Pradesh";
		$filter_data['sector_path']="CustomizedTours/customized_madhya_pradesh";
		$head_data['title'] = "Splendors of Madhya Pradesh";

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
		$filter_data['slider_image'] = 'fit/SA1/south-africa-with-victoria-falls-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA1/south-africa-with-victoria-falls.jpg';
		$filter_data['sector']="Madhya Pradesh";
		$filter_data['sector_path']="CustomizedTours/customized_madhya_pradesh";
		$head_data['title'] = "Historic Madhya Pradesh";

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
		$filter_data['sector_path']="CustomizedTours/custom_africa";
		$head_data['title'] = "MARVELLOUS MAURITIUS";
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
		$filter_data['sector_path']="CustomizedTours/custom_africa";
		$head_data['title'] = "MARVELLOUS MAURITIUS";
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
		$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "BLISSFUL BALI";
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
		$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "BEST OF CHINA";
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
		$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "STUNNING SINGAPORE";
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
		$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "DISCOVER RUSSIA TOUR";
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
		$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "BEST OF RUSSIA";
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
		$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "KUALA LUMPUR";
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
		$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "AMAZING CHINA";
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}
	public function scenic_madhyapradesh(){
		$product_id ='49';
		$product_code='MP3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/SA1/south-africa-with-victoria-falls-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA1/south-africa-with-victoria-falls.jpg';
		$filter_data['sector']="Asia";
		$filter_data['sector_path']="CustomizedTours/customized_madhya_pradesh";
		$head_data['title'] = "Madhya Pradesh";
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
		$filter_data['sector_path']="CustomizedTours/custom_asia";
		$head_data['title'] = "AMAZING NEW ZEALAND Tour";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SEYCHELLES MAGIC Tour";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SPECTACULAR SOUTH AFRICA";
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
		$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "BEST OF THAILAND";
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
		$filter_data['sector_path']="CustomizedTours/customized_asia";
		$head_data['title'] = "BANGKOK PATTAYA";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Mesmerising Nepal";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Nepal";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Temple Tour of Nepal";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEAUTIFUL SRI LANKA";
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
		$filter_data['slider_mobile_image'] = 'fit/SL2/scenic-Sri-Lanka.jpg';
		$filter_data['sector']="Sri Lanka";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SCENIC SRI LANKA";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Short Break Kerala";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Kerala";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Attractive Kerala";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Enchanting Kerala with Kanyakumari";
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
		$filter_data['sector_path']="CustomizedTours/customized_maldives";
		$head_data['title'] = "MALDIVES FUN ISLAND";
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
		$filter_data['sector_path']="CustomizedTours/customized_maldives";
		$head_data['title'] = "MALDIVES PARADISE ISLAND RESORT";
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
		$filter_data['sector_path']="CustomizedTours/customized_maldives";
		$head_data['title'] = "MALDIVES OLHUVELI";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Rajasthan";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Best Of Rajasthan";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Rajasthan";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Glimpse of Rajasthan";
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details_fit',$filter_data);
		$this->load->view('common/footer');
	}

	public function gujarat_special_wildlife_and_pilgrimage(){
		$product_id ='69';
		$product_code='GJ1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		// $filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		//$filter_data['slider_mobile_image'] = 'images/tours/africa/african-safari.jpg';
		$filter_data['slider_image'] = 'fit/GJ1/gujarat-wildlife-and-pilgrimage-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/GJ1/gujarat-special-wildlife-and-pilgrimage.jpg';
		$filter_data['sector']="Gujarat";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Gujarat Special Wildlife and Pilgrimage";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF TURKEY";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "TURKISH DELIGHT";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "AZERBAIJAN BAKU";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "DUBAI ABU DHABI LUXURY";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SWISS PARIS";
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
		$filter_data['sector']="Europe";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "GREEK VOYAGE";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "HONG KONG";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "HEAVEN ON EARTH";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SINGAPORE FULLY LOADED";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "VIETNAM";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BASIC SINGAPORE";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BASIC SINGAPORE";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF DUBAI";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BLISSFUL BALI HONEYMOON SPECIA";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF BALI";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF SRI LANKA";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "CAIRO";
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
		$filter_data['slider_mobile_image'] = 'fit/EG3/Egypt-Jewels.jpg';
		$filter_data['sector']="Egypt";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "EGYPT JEWELS";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "SPANISH DELIGHT";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BEST OF SPAIN";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "BRITISH COLUMBIA CANADA";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "CANADIAN ROCKIES";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "EASTERN CANADA";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Gujarat";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Gujarat Wildlife and Pilgrimage";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hills and Meadows";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Kashmir with Vaishnodevi";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Mesmerizing South Karnataka";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Mysore Ooty Kodai";
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
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Quick Break Karnataka";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Himachal";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Classic Himachal";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Himachal";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Devbhumi Himachal";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Madhya Pradesh";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Scenic Madhya Pradesh";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Tamil Nadu";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Highlights of Tamil Nadu";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Goa";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Goa";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="North East";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Darjeeling Pelling Gangtok";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Andhra Pradesh";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hyderabad with Ramoji";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Andhra Pradesh";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Hyderabad with Srisailyam";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Orissa";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Unique Orissa";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Eastern Europe";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "Eastern Europe";
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
		$filter_data['slider_image'] = 'fit/SA2/spectacular-south-africa-banner.jpg';
		$filter_data['slider_mobile_image'] = 'fit/SA2/spectacular-south-africa.jpg';
		$filter_data['sector']="Eastern Europe";
		$filter_data['sector_path']="CustomizedTours/customized_africa";
		$head_data['title'] = "EASTERN EUROPE EXPRESS";
		$this->load->view('common/header',$head_data);
		// $this->load->view('tours/tour_details',$filter_data);
		$this->load->view('tours/tour_details',$filter_data);
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
		$header = "<div align='right'><h2 style='display:inline-block; vertical-align:middle; text-align:left; padding-left:30px;'><b style='margin-top:50px'><br/>".$_POST['sector']."</b><img style='display:inline-block; float:right; width:150px;' src='".base_url()."assets/images/Mango-Holidays-logo.png'></h2><hr style='color:#ccc;'/></div>";

		@$pdf->SetHTMLHeader($header); //Add header
		@$pdf->SetHTMLFooter('<hr style="color:#ccc;"/><p align="center" style="padding-bottom:5%;">Experience of a Lifetime!</p>');
		 $pdf->AddPage('P', // L - landscape, P - portrait 
        '', '', '', '',
        5, // margin_left
        5, // margin right
       45, // margin top
       30, // margin bottom
        0, // margin header
        0); // margin footer
		
		//generate the PDF!

		@$pdf->WriteHTML($_POST['data'],2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		@$pdf->Output($pdfFilePath, "F");
		
		echo  $pdfFilePath;
	}

	public function call_api($product_id,$product_code){
		$api_url ="http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/getProductForWebsite?ProductID=".$product_id."&ProductCode=".$product_code;
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

		$return = curl_exec($ch);
		curl_close($ch);
		$decrypt_data = json_decode($return);
		$result['complete_data'] = $decrypt_data;
		return $result;

	}

}
