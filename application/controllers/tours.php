<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tours extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function exotic_europe()
	{
		$product_id ='5';
		$product_code='E1';

		$data['api_result']=$this->call_api($product_id,$product_code);		
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/europe/exotic-eurpoe-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Europe";
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
		
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/europe/classic-europe-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$filter_data['sector']="Europe";
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";

		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function glimpses_of_europe()
	{
		$product_id ='2';
		$product_code='E3';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/2.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$filter_data['sector']="Europe";
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";


		$this->load->view('common/header',$head_data);
		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
		$this->load->view('common/footer');
	}

	public function grand_europe()
	{
		$product_id ='7';
		$product_code='E5';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		

		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/2.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$filter_data['sector']="Europe";
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";

		$this->load->view('common/header');
		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
		$this->load->view('common/footer');
	}

	public function best_of_europe()
	{
		$product_id ='8';
		$product_code='E4';
		
		$data['api_result']=$this->call_api($product_id,$product_code);
		

		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['itenary_program']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/2.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";
		$filter_data['sector']="Europe";
		$this->load->view('common/header',$head_data);
		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
		$this->load->view('common/footer');
	}

	public function incredible_america()
	{
		$product_id ='18';
		$product_code='U1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);		
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="America";
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="America";
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="America";
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$head_data['title'] = "West Coast America - Mango Holidays - Best Group Tour - call 838003503";
		$filter_data['sector']="America";

		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}

	public function south_african_safari()
	{
		$product_id ='17';
		$product_code='S1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);	
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Africa";
		$head_data['title'] = "South Africa Tour Holiday Packages from Mumbai Pune Mango Holidays";

		$this->load->view('common/header');
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}
	
	public function dazzling_dubai()
	{
		$product_id ='11';
		$product_code='D1';
		
		$data['api_result']=$this->call_api($product_id,$product_code);		
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Dubai";
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Japan";
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


		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Mauritius";
		$head_data['title'] = "Mauritius Group Tour - Mango Holidays";

		$this->load->view('common/header',$head_data);
		$this->load->view('tours/tour_details',$filter_data);
		$this->load->view('common/footer');
	}



	public function create_pdf($filename,$data){
		$this->load->library('fpdf_master');
		
		$this->fpdf->SetFont('Arial','B',18);
		
		$this->fpdf->Cell(50,10,$data);
		//All text which have to print should be goes here
		//also you can go for calling view over here and put the same type of code inside the view
		
		echo $this->fpdf->Output($filename,'D');// Name of PDF file
		//Can change the type from D=Download the file		
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

		$result['ProductItineraryByDay'] = $decrypt_data->ProductItineraryByDay;
		$result['Days'] = $decrypt_data->Days;
		$result['Nights'] = $decrypt_data->Nights;
		$result['UpcomingTours'] = $decrypt_data->UpcomingTours;
		$result['ProductTitle'] = $decrypt_data->ProductTitle;
		$result['Inclusions'] = $decrypt_data->Inclusions;
		$result['Exclusions'] = $decrypt_data->Exclusions;

		return $result;

	}

}
