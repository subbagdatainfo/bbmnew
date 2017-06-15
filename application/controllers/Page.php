<?php

class Page extends CI_Controller {
	
	function index() {
		// $config['center'] = '-6.225025, 106.802974';
		// $config['zoom'] = '18';
		// $this->googlemaps->initialize($config);

		// $marker = array();
		// $marker['position'] = '-6.225025, 106.802974';
		// $this->googlemaps->add_marker($marker);
		// $data['map'] = $this->googlemaps->create_map();

		$this->load->view('template/header');
		$this->load->view('landing');
		$this->load->view('template/footer');
	}

	public function pendaftaran(){
		$this->load->view('template/header');
		$this->load->view('pendaftaran3');
		$this->load->view('template/footer');
	}

	public function maestro(){
		$this->load->view('template/header');
		$this->load->view('maestro');
		$this->load->view('template/footer');
	}

	public function contact(){
		$this->load->library('googlemaps');
		
		$config['center'] = '-6.225025, 106.802974';
		$config['zoom'] = '18';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-6.225025, 106.802974';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		//$this->load->view('template/header',$data);
		$this->load->view('contact',$data);
		$this->load->view('template/footer');
	}

	public function login(){
		$this->load->view('template/header');
		$this->load->view('v_login');
		$this->load->view('template/footer');
	}

	function forgotpasssword(){
		$this->load->view('template/header');
		$this->load->view('forgot');
		$this->load->view('template/footer');
	}
}
	
