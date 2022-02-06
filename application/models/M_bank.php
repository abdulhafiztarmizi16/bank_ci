<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bank extends CI_Model {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('');
	// }
    //Untuk Membuat Data CRUD
     public function simpan($data)
    {
        $this->db->insert('tb_bank', $data);
    }

	public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tb_bank');
        $this->db->order_by('no');
        return $this->db->get()->result();
    }

    public function get_product_keyword($keyword){
	    $this->db->select('*');
	    $this->db->from('tb_bank');
		$this->db->like('nama',$keyword);
		$this->db->or_like('jb_harga',$keyword);
		return $this->db->get()->result();
		}


    public function detail($no)
    {
        $this->db->select('*');
        $this->db->from('tb_bank');
        $this->db->where('no',$no);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('no',$data['no']);
        $this->db->update('tb_bank', $data);

    }

    public function hapus($data)
    {
        $this->db->where('no',$data['no']);
        $this->db->delete('tb_bank', $data);
    }

}



















 