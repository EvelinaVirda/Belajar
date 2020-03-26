<?php

/**
 * 
 */
class M_data extends CI_Model
{
	
	function ambil_data()
	{
		return $this->db->get('user');
	}

	function ambil_data_makanan()
	{
		return $this->db->query('SELECT * FROM makanan ORDER BY id desc limit 3');
	}

	function input_data_makanan($data,$table){
		$this->db->insert($table,$data);
	}

    function hapus_makanan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function single_data($where,$table){       
        return $this->db->get_where($table,$where);
    }

    function jumlah_data($table){
        return $this->db->get($table)->num_rows();
    }

    function tampil_data($table, $number,$offset){
        return $this->db->get($table,$number,$offset)->result();
    }

    function tampil_kategori_makanan()
    {
        return $this->db->query('SELECT * FROM makanan where kategori LIKE "makanan"');
    }

    function tampil_kategori_minuman()
    {
        return $this->db->query('SELECT * FROM makanan where kategori LIKE "minuman"');
    }

    function tampil_kategori_lainnya()
    {
        return $this->db->query('SELECT * FROM makanan where kategori LIKE "lain"');
    }
    
    function kirim_pesan($data,$table){
        $this->db->insert($table,$data);
    }

    function ambil_pesan()
    {
        return $this->db->get('pesan');
    }

    function hapus_pesan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }



	/* 
    fungsi baru dari http://www.ikhwansetyo.com/2018/04/membuat-input-data-codeigniter-form.html
	
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
 
    function jumlah_data($table){
        return $this->db->get($table)->num_rows();
    }
 
    function tampil_data($table, $number,$offset){
        return $this->db->get($table,$number,$offset)->result();
    }
 
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
 
    function single_data($where,$table){       
        return $this->db->get_where($table,$where);
    }
 
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    */

}
