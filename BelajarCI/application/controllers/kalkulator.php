<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulator extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){		
		$data['judul'] = "Kalkulator Sederhana";
		$this->load->view('v_header_admin',$data);
		$this->load->view('v_kalkulator',$data);
		$this->load->view('v_footer',$data);
	}

	public function hitung(){
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$operator = $this->input->post('operator');

		if ($operator == "+") {
			$hasil['hasil_tambah'] = $angka1 + $angka2 ;
			$this->load->view('v_header_admin');
			$this->load->view('hasil_kalkulator/v_kalkulator_hasil_tambah',$hasil);
			$this->load->view('v_footer');
		}

		elseif ($operator == "-") {
			$hasil['hasil_kurang'] = $angka1 - $angka2 ;
			$this->load->view('v_header_admin');
			$this->load->view('hasil_kalkulator/v_kalkulator_hasil_kurang',$hasil);
			$this->load->view('v_footer');
		}

		elseif ($operator == "/") {
			$hasil['hasil_bagi'] = $angka1 / $angka2 ;
			$this->load->view('v_header_admin');
			$this->load->view('hasil_kalkulator/v_kalkulator_hasil_bagi',$hasil);
			$this->load->view('v_footer');
		}

		elseif ($operator == "*") {
			$hasil['hasil_kali'] = $angka1 * $angka2 ;
			$this->load->view('v_header_admin');
			$this->load->view('hasil_kalkulator/v_kalkulator_hasil_kali',$hasil);
			$this->load->view('v_footer');
		}

	}

}