<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header',$head_data);
		$this->load->view('group_tours/view',$data);
		$this->load->view('common/footer');
	}

	public function contact_us()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Contact Us | Mango Holidays";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/contact_us');
		$this->load->view('common/footer');
	}

	public function about_us()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "About Us | Mango Holidays";
		$head_data['page_description'] = "Best Tour Operator - Mumbai, Thane &amp; Pune. The journey of Mango Holidays began a decade ago. Since then our growth has been phenomenal.";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/about_us');
		$this->load->view('common/footer');
	}

	public function corporate_tours()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Corporate Tours &amp; Holiday Packages from Mumbai, Thane, Pune | Mango Holidays";
		$head_data['page_description'] = "Looking for reputed corporate tour packages &amp; holiday packages from Mumbai, Navi Mumbai, Thane, Pune. Call Now! 8380039503";
		$head_data['page_keyword'] = "corporate tour packages,corporate tour packages in mumbai,corporate tour packages in navi mumbai,corporate tour packages in pune,corporate tour packages in thane,corporate tour and travel from mumbai,corporate tour and travel from thane,corporate tour and travel from pune,corporate tour and travel mumbai,corporate tour and travel india";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/corporate_tours');
		$this->load->view('common/footer');
	}
	public function media()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "International Honeymoon Tour Packages From Mumbai, Pune, Thane, India  | Mango Holidays";
		$head_data['page_description'] = "We @ Mango Holiday To Provide International Honeymoon Tour, International Honeymoon Tour Packages, International Honeymoon Group Tour, International Honeymoon Packages With Flight From Mumbai, Thane, India.";
		$head_data['page_keyword'] = "international honeymoon packages,international honeymoon tour packages,international honeymoon packages from mumbai,international honeymoon packages from thane,international honeymoon packages from pune,international honeymoon packages from india,international honeymoon tour packages from mumbai,international honeymoon tour packages from pune,international honeymoon tour packages from thane,international honeymoon tour packages from india,international honeymoon packages with flight,international honeymoon packages with flight from mumbai,international honeymoon packages with flight from pune,international honeymoon packages with flight from india.";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/media');
		$this->load->view('common/footer');
	}
	public function media_page2()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Advetorial - International Honeymoon Tour Packages From Mumbai, Pune, Thane, India  | Mango Holidays";
		$head_data['page_description'] = "We @ Mango Holiday To Provide International Honeymoon Tour, International Honeymoon Tour Packages, International Honeymoon Group Tour, International Honeymoon Packages With Flight From Mumbai, Thane, India.";
		$head_data['page_keyword'] = "international honeymoon packages,international honeymoon tour packages,international honeymoon packages from mumbai,international honeymoon packages from thane,international honeymoon packages from pune,international honeymoon packages from india,international honeymoon tour packages from mumbai,international honeymoon tour packages from pune,international honeymoon tour packages from thane,international honeymoon tour packages from india,international honeymoon packages with flight,international honeymoon packages with flight from mumbai,international honeymoon packages with flight from pune,international honeymoon packages with flight from india.";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/media_page2');
		$this->load->view('common/footer');
	}
	public function media_page3()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Advetorial - International Honeymoon Tour Packages From Mumbai, Pune, Thane, India  | Mango Holidays";
		$head_data['page_description'] = "We @ Mango Holiday To Provide International Honeymoon Tour, International Honeymoon Tour Packages, International Honeymoon Group Tour, International Honeymoon Packages With Flight From Mumbai, Thane, India.";
		$head_data['page_keyword'] = "international honeymoon packages,international honeymoon tour packages,international honeymoon packages from mumbai,international honeymoon packages from thane,international honeymoon packages from pune,international honeymoon packages from india,international honeymoon tour packages from mumbai,international honeymoon tour packages from pune,international honeymoon tour packages from thane,international honeymoon tour packages from india,international honeymoon packages with flight,international honeymoon packages with flight from mumbai,international honeymoon packages with flight from pune,international honeymoon packages with flight from india.";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/media_page3');
		$this->load->view('common/footer');
	}
	
	public function guest_testimonials_all()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Guest Testimonials | Mango Holidays";
		$head_data['page_description'] = "Our Satisfied Clients";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/guest_testimonials_all');
		$this->load->view('common/footer');
	}

	public function guest_testimonials_videos()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Guest Testimonials | Mango Holidays";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/guest_testimonials_videos');
		$this->load->view('common/footer');
	}
	public function guest_testimonials_videos_page2()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Guest Testimonials | Mango Holidays";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/guest_testimonials_videos_page2');
		$this->load->view('common/footer');
	}
	public function guest_testimonials_videos_page3()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Guest Testimonials | Mango Holidays";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/guest_testimonials_videos_page3');
		$this->load->view('common/footer');
	}
	public function destination_videos()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Destination Videos | Mango Holidays";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/destination_videos');
		$this->load->view('common/footer');
	}
	public function feedback()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Guest Feedback Form | Mango Holidays";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/feedback');
		$this->load->view('common/footer');
	}
	public function careers()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Careers | Mango Holidays";
		$head_data['page_description'] = "Careers - If you have the passion towards travel, good communication skills &amp; believe in teamwork, send in your CV to careers@mangoholidays.in";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/careers');
		$this->load->view('common/footer');
	}
	public function photo_gallery()
	{
		$head_data['travel_type'] = 'pages';
		$head_data['title'] = "Photo Gallery";
		$head_data['page_description'] = "";
		$head_data['page_keyword'] = "";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/photo_gallery');
		$this->load->view('common/footer');
	}
}
