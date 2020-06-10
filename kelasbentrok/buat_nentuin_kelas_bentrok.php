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