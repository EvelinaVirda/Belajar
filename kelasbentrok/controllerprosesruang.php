<?php


function prosesruang()
{
	$this->load->helper(['form']);
	$this->load->library(['form_validation']);

        /**
         * Gunakan start time sebagai acuan validasi, terkait range jadwal (callback_check_avaiable_daterange).
         * callback_check_avaiable_daterange adalah custom validation, silahkan baca user_guide terkait Form_Vaidation
         * http://localhost/wpulogin/user_guide/libraries/form_validation.html#callbacks-your-own-validation-methods
         * 
         */

        $this->form_validation->set_rules('m_booking_start', 'Jam Mulai', 'required|callback_check_avaiable_daterange');
        $this->form_validation->set_rules('m_booking_end', 'Jam Selesai', 'required');


        if ($this->input->post(null, true)) {
            /**
             * Un-Comment 2 baris di bawah untuk uji date tanpa input, invoke ke variable global $_POST
             */
            //$_POST['m_booking_start'] = "2020-05-03T12:21";
            //$_POST['m_booking_end'] = "2020-05-03T12:25";
        }

        /**
         * Jalankan validasi, form validatin ci3 otomatis mengecek berdasarkan data dari $_POST
         */
        if ($this->form_validation->run()) {

        	$m_booking_start  = $this->input->post('m_booking_start');
        	$m_booking_end    = $this->input->post('m_booking_end');
        	$m_booking_agenda = $this->input->post('m_booking_agenda');
        	$m_booking_PIC    = $this->input->post('m_booking_PIC');
        	$m_booking_room_name    = $this->input->post('m_booking_room_name');
        	$m_lantai    = $this->input->post('lantai');

        	$data = array(
        		'm_booking_start'   => $m_booking_start,
        		'm_booking_end'     => $m_booking_end,
        		'm_booking_agenda'  => $m_booking_agenda,
        		'm_booking_PIC'     => $m_booking_PIC,
        		'm_booking_room_name'     => $m_booking_room_name,
        		'lantai'     => $m_lantai
        	);
        	$this->room->prosesruang($data, 'user_booking');
        	redirect(site_url('admin/lantai' . $m_lantai));
        } else {

            // Jika error, redirect ke form tambah ruangan kembali dengan melakukan set flash data key error_message
        	$this->session->set_flashdata('error_message', validation_errors());
        	redirect(site_url('admin/tambahruangan'));
        }
    }

    //===============================================================================================//

    public function check_avaiable_daterange()
    {
    	$postData = $this->input->post(null, true);
    	$start_date_raw = $postData['m_booking_start'];
    	$end_date_raw = $postData['m_booking_end'];

        //Convert raw to DateTime object
    	$start_date = date_create($start_date_raw);
    	$end_date = date_create($end_date_raw);

        //Convert date to str for sql format
    	$start_date_str = date_format($start_date, "Y:m:d H:i:s");
    	$end_date_str = date_format($end_date, "Y:m:d H:i:s");

    	$db = $this->db;
    	$db->group_start();
    	$db->where('m_booking_start <=', $start_date_str);
    	$db->where('m_booking_end >=', $start_date_str);
    	$db->group_end();

    	$db->group_start();
    	$db->where('m_booking_start <=', $end_date_str);
    	$db->where('m_booking_end >=', $end_date_str);
    	$db->group_end();

    	$recordCount = $db->count_all_results('user_booking');

    	if ($recordCount == 0) {
    		return true;
    	}
    	$this->form_validation->set_message('check_avaiable_daterange', 'Jadwal bentrok, silahkan mencari kelas yang lain', 'The %s ');
    	return false;
    }