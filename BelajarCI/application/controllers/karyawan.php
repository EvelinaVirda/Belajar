<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('v_header');
		$this->load->view('v_pendaftaran');
		$this->load->view('v_footer');
	}

	function input_karyawan(){
 
        //proses validasi form
        $this->form_validation->set_rules('nama','Nama Karyawan','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin Karyawan','required');
        $this->form_validation->set_rules('alamat','Alamat Karyawan','required');
 
        //jika form tidak ada yang kosong jalankan perintah dibawah
        if($this->form_validation->run() != false){
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["foto"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('foto'))
        {
            //jika upload foto error
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            // $this->load->view('karyawan/dokter', $error);
        }
        else
        {
            //jika upload foto berhasil dilanjutkan proses form
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $data = array('upload_data' => $this->upload->data());
            print_r($this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['orig_name'];
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'password' => md5($password),
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                 'foto' => $nm_file
                );
            $this->m_data->input_data($data,'karyawan');
            echo "<script>alert('Data berhasil dikirim!');history.go(-1);</script>";
        }
    } else{
        $this->load->view('v_header');
		$this->load->view('v_pendaftaran');
		$this->load->view('v_footer');
    }
}
}