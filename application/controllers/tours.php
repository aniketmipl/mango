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
		$filter_data['slider_image'] = 'images/portfolio/1.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];

		$this->load->view('common/header');
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
		$filter_data['slider_image'] = 'images/portfolio/2.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		

		$this->load->view('common/header');
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

		$this->load->view('common/header');
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
		
		$data['api_result']=$this->call_api($product_id,'$product_code');
		

		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['itenary_program']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/portfolio/2.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		

		$this->load->view('common/header');
		if(isset($filter_data)){
			$this->load->view('tours/tour_details',$filter_data);
		}
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
