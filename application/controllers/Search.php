<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search_result()
	{		
		$product_id = $this->input->get('product_id');	
		$sector_name = $this->input->get('sector_name');	
		$travel_type = $this->input->get('travel_type');
		$product_image = $this->input->get('product_image');
		$append = "-banner";
		function append_filename($product_image, $append) {
		    preg_match ("#^(.*)\.(.+?)$#", $product_image , $matches);
		    return $matches[1].$append.'.'.$matches[2];
		}
		$product_image_banner = append_filename($product_image, $append);
		$data['api_result']=$this->call_api($product_id,$travel_type);		
		$data['sector_name']=$sector_name;
		$data['travel_type']=$travel_type;
		$data['product_image']=$product_image;
		$data['product_image_banner']=$product_image_banner;
		$filter_data['complete_data'] = $data['api_result']['complete_data'];
		$filter_data['sector']=$data['sector_name'];
		$filter_data['travel_type']=$data['travel_type'];
		$filter_data['slider_image_banner'] = $data['product_image_banner'];
		$filter_data['slider_image'] = $data['product_image'];
		$head_data['sector'] = $data['sector_name'];
		$head_data['travel_type'] = $data['travel_type'];
		$head_data['title'] = "Search Result | Mango Holidays";
		$this->load->view('common/header',$head_data);
		if($travel_type == "GIT"){
			$this->load->view('search_result/search_view',$filter_data);
		}
		else if($travel_type == "FIT"){
			$this->load->view('search_result/search_view_fit',$filter_data);
		}	
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

	public function call_api($product_id,$travel_type){		
		$api_url = "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/getProductForWebsite?ProductId=".$product_id."&TravelType=".$travel_type;		
		// echo $api_url;
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
