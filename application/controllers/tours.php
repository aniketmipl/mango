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
		
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/europe/classic-europe-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$filter_data['sector']="Europe";
		$filter_data['sector_path']="GroupTours/group_europe";
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
		$filter_data['slider_image'] = 'images/tours/europe/glimpses-of-europe-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$filter_data['sector']="Europe";
		$filter_data['sector_path']="GroupTours/group_europe";
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
		$filter_data['slider_image'] = 'images/tours/europe/grand-europe-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$filter_data['sector']="Europe";
		$filter_data['sector_path']="GroupTours/group_europe";
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
		$filter_data['slider_image'] = 'images/tours/europe/best-of-europe-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];		
		$head_data['title'] = "Europe Packages | Book Europe Tour Packages | MANGO HOLIDAYS";
		$filter_data['sector']="Europe";
		$filter_data['sector_path']="GroupTours/group_europe";
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
		$filter_data['slider_image'] = 'images/tours/america/incredible-america-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/america/east-cost-america-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/america/orlando-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/america/west-cost-america-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/africa/african-safari-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Africa";
		$filter_data['sector_path']="GroupTours/group_africa";
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
		$filter_data['slider_image'] = 'images/tours/dubai/dazzling-dubai-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
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
		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/japan/japanese-discovery-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
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


		$filter_data['itenary']= $data['api_result']['ProductItineraryByDay'];
		$filter_data['UpcomingTours']= $data['api_result']['UpcomingTours'];
		$filter_data['ProductTitle']= $data['api_result']['ProductTitle'];
		$filter_data['Days']= $data['api_result']['Days'];
		$filter_data['Nights']= $data['api_result']['Nights'];
		$filter_data['slider_image'] = 'images/tours/mauritius/mauritius-masti-banner.jpg';
		$filter_data['Inclusions']= $data['api_result']['Inclusions'];
		$filter_data['Exclusions']= $data['api_result']['Exclusions'];
		$filter_data['sector']="Mauritius";
		$filter_data['sector_path']="GroupTours/group_mauritius";
		$head_data['title'] = "Mauritius Group Tour - Mango Holidays";

		$this->load->view('common/header',$head_data);
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
