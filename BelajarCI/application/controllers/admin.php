<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data['judul'] = "Halaman Admin";
		$this->load->view('v_header_admin', $data);
		$this->load->view('v_admin');
		$this->load->view('v_footer',$data);
	}
}