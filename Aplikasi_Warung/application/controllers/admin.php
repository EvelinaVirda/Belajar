<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data['pesans'] = $this->m_data->ambil_pesan()->result();
		$this->load->view('v_header_admin');
		$this->load->view('v_halaman_admin',$data);
		$this->load->view('v_footer');
	}

	public function input_makanan()
	{
		$this->load->view('v_header_admin');
		$this->load->view('v_buat_post');
		$this->load->view('v_footer');
	}

	public function about()
	{
		$this->load->view('v_header');
		$this->load->view('v_about');
		$this->load->view('v_footer');
	}

	public function list_makanan()
	{
        
        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data('makanan');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/list_makanan/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;
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
        $this->load->view('v_header_admin');
        $this->load->view('v_list_makanan',$data);
        $this->load->view('v_footer');
    } /*
		$data['makanan'] = $this->m_data->ambil_data_makanan()->result();
		$this->load->view('v_header_admin');
		$this->load->view('v_list_makanan',$data);
		$this->load->view('v_footer');
	} */

    

	public function tambah_makanan(){

        $this->form_validation->set_rules('makanan','Makanan ','required');
        $this->form_validation->set_rules('harga','Harga','required');
 
        //jika form tidak ada yang kosong jalankan perintah dibawah
        if($this->form_validation->run() != false){
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["gambar"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('gambar'))
        {
            //jika upload foto error
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            // $this->load->view('karyawan/dokter', $error);
        }
        else
        {
            //jika upload foto berhasil dilanjutkan proses form
            $kategori = $this->input->post('kategori');
            $makanan = $this->input->post('makanan');
            $harga = $this->input->post('harga');
            $data = array('upload_data' => $this->upload->data());
            print_r($this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['orig_name'];
            $data = array(
                'kategori' => $kategori,
                'makanan' => $makanan,
                'harga' => $harga,
                'gambar' => $nm_file
                );
            $this->m_data->input_data_makanan($data,'makanan');
            redirect('admin/list_makanan');
        }
    } else{
        $this->load->view('v_header_admin');
		$this->load->view('v_list_makanan');
		$this->load->view('v_footer');
          }
    }

    public function hapus_makanan($id){
        // query untuk memilih data karyawan berdasarkan id karyawan
        $image_path = './gambar/';
        $query_get_image = $this->db->get_where('makanan', array('id' => $id));
        foreach ($query_get_image->result() as $record)
        {
        // $filename adalah variabel untuk menyimpan path gambar + nama gambar
            $filename = $image_path . $record->gambar;
            if(unlink($filename)){
                // jika menghapus foto yang ada di folder gambar berhasil maka hapus data di database
                $where = array('id' => $id);
                $this->m_data->hapus_makanan($where,'makanan');
                redirect('admin/list_makanan');
            }
        }
    }

    public function edit_makanan($id){
        $where = array('id' => $id );
        $data['makanan'] = $this->m_data->single_data($where,'makanan')->result();
        $this->load->view('v_header_admin');
        $this->load->view('v_edit_makanan',$data);
        $this->load->view('v_footer');
    }

    function update_makanan(){
        $this->form_validation->set_rules('makanan','Makanan ','required');
        $this->form_validation->set_rules('harga','Harga','required');
 
        if($this->form_validation->run() != false){
 
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["gambar"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
            if(empty($_FILES['gambar']['name'])){
                $id = $this->input->post('id');
                $kategori = $this->input->post('kategori');
                $makanan = $this->input->post('makanan');
                $harga = $this->input->post('harga');
                $data = array(
                    'kategori' => $kategori,
                    'makanan' => $makanan,
                    'harga' => $harga
                    );
                $where = array(
                    'id' => $id
                    );
 
                $this->m_data->update_data($where,$data,'makanan');
                redirect('admin/list_makanan');
            } else {
 
                if ( ! $this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                // $this->load->view('karyawan/datakaryawan', $error);
                } else {
                    $id = $this->input->post('id');
                    $kategori = $this->input->post('kategori');
                    $makanan = $this->input->post('makanan');
                    $harga = $this->input->post('harga');
                    $data = array('upload_data' => $this->upload->data());
                    print_r($this->upload->data());
                    $datafoto=$this->upload->data();
                    $nm_file = $datafoto['orig_name'];
                    $data = array(
                        'kategori' => $kategori,
                        'makanan' => $makanan,
                        'harga' => $harga,
                        'gambar' => $nm_file
                        );
                    $where = array(
                        'id' => $id
                        );
                    $image_path = './gambar/';
                    $query_get_image = $this->db->get_where('makanan', array('id' => $id));
                    foreach ($query_get_image->result() as $record)
                    {
                    // delete file, if exists...
                        $filename = $image_path . $record->gambar;
                        unlink($filename);
                    }
                    $this->m_data->update_data($where,$data,'makanan');
                    redirect('admin/list_makanan');
                }
            }
        }
    }

    function hapus_pesan($id){
        $where = array('id' => $id);
        $this->m_data->hapus_pesan($where,'pesan');
        redirect('admin');
    }

}

		//fungsi baru dari http://www.ikhwansetyo.com/2018/04/membuat-input-data-codeigniter-form.html

        /*
	    function inputKaryawan(){
 
        //proses validasi form
        $this->form_validation->set_rules('nama','Nama Karyawan','required');
        $this->form_validation->set_rules('alamat','Alamat Karyawan','required');
        $this->form_validation->set_rules('gender','Gender Karyawan','required');
        $this->form_validation->set_rules('gaji','Gaji Karyawan','required');
 
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
            $gender = $this->input->post('gender');
            $gaji = $this->input->post('gaji');
            $alamat = $this->input->post('alamat');
            $data = array('upload_data' => $this->upload->data());
            print_r($this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['orig_name'];
            $data = array(
                'nama' => $nama,
                'foto' => $nm_file,
                'gender' => $gender,
                'alamat' => $alamat,
                'gaji' => $gaji
                );
            $this->m_data->input_data($data,'karyawan');
            redirect('karyawan/tambahKaryawan');
        }
    } else{
        $this->load->view('karyawan/header');
        $this->load->view('karyawan/tambahKaryawan');
        $this->load->view('karyawan/footer');
    }
}

        function hapusKaryawan($id){
        // query untuk memilih data karyawan berdasarkan id karyawan
        $image_path = './gambar/';
        $query_get_image = $this->db->get_where('karyawan', array('id_karyawan' => $id));
        foreach ($query_get_image->result() as $record)
        {
        // $filename adalah variabel untuk menyimpan path gambar + nama gambar
            $filename = $image_path . $record->foto;
            if(unlink($filename)){
                // jika menghapus foto yang ada di folder gambar berhasil maka hapus data di database
                $where = array('id_karyawan' => $id);
                $this->m_data->hapus_data($where,'karyawan');
                redirect('karyawan/dataKaryawan');
            }
        }
    }
*/