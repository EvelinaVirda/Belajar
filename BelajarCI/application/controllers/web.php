<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){		
		$data['judul'] = "Halaman depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
	
	public function about(){		
		$data['judul'] = "Halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}

	public function v_login(){		
		$data['judul'] = "Halaman Login";
		$this->load->view('v_header',$data);
		$this->load->view('v_login',$data);
		$this->load->view('v_footer',$data);
	}

	public function list_index(){		
		$data['judul'] = "List Belajar";
		$this->load->view('v_header_admin',$data);
		$this->load->view('v_list_index',$data);
		$this->load->view('v_footer',$data);
	}

}