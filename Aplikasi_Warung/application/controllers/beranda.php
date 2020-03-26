<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
	parent::__construct();		
	$this->load->model('m_data');

	}
	public function index()
	{
        $data['makanan'] = $this->m_data->ambil_data_makanan()->result();
		$this->load->view('v_header');
		$this->load->view('v_index',$data);
		$this->load->view('v_footer');
	}

	public function about()
	{
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_about',$data);
		$this->load->view('v_footer');
	}

	public function menu()
	{

	$this->load->database();
        $jumlah_data = $this->m_data->jumlah_data('makanan');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/beranda/makanan/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 6;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        
        $data['makanan'] = $this->m_data->tampil_data('makanan',$config['per_page'],$from);
        $this->load->view('v_header');
        $this->load->view('v_makanan',$data);
        $this->load->view('v_footer');
	}

	public function login()
    {
        $this->load->view('v_login');
    }

    public function pesan()
    {
        $this->load->view('v_pesan');
    }

    public function kirim_pesan()
    {
            $nama = $this->input->post('nama');
            $telp = $this->input->post('telp');
            $pesan = $this->input->post('pesan');

             $data = array(
            'nama' => $nama,
            'no_telp' => $telp,
            'pesan' => $pesan
            );
        $this->m_data->kirim_pesan($data,'pesan');
        echo "<script>alert('Data berhasil dikirim!');history.go(-1);</script>";
    }

}
