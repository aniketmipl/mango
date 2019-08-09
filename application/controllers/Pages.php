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

		$head_data['title'] = "Contact Us Page";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/contact_us');
		$this->load->view('common/footer');
	}

	public function about_us()
	{

		$head_data['title'] = "About Us Page";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/about_us');
		$this->load->view('common/footer');
	}

	public function corporate_tours()
	{

		$head_data['title'] = "Corporate Tour Page";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/corporate_tours');
		$this->load->view('common/footer');
	}
	public function media()
	{

		$head_data['title'] = "Advetorial";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/media');
		$this->load->view('common/footer');
	}
	public function media_page2()
	{

		$head_data['title'] = "Advetorial";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/media_page2');
		$this->load->view('common/footer');
	}
	public function media_page3()
	{

		$head_data['title'] = "Advetorial";

		$this->load->view('common/header',$head_data);
		$this->load->view('pages/media_page3');
		$this->load->view('common/footer');
	}

}
