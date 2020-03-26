<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
	parent::__construct();		 
	$this->load->model('m_data');

	}

	public function makanan()
	{
   
        $data['makanan'] = $this->m_data->tampil_kategori_makanan()->result();
        $this->load->view('v_header');
        $this->load->view('kategori/v_makanan',$data);
        $this->load->view('v_footer');
	}

    public function minuman()
    {
   
        $data['makanan'] = $this->m_data->tampil_kategori_minuman()->result();
        $this->load->view('v_header');
        $this->load->view('kategori/v_minuman',$data);
        $this->load->view('v_footer');
    }

    public function lainnya()
    {
   
        $data['makanan'] = $this->m_data->tampil_kategori_lainnya()->result();
        $this->load->view('v_header');
        $this->load->view('kategori/v_lainnya',$data);
        $this->load->view('v_footer');
    }

}
