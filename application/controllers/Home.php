<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bank');
	}
	
	public function index()
	{
		$data = array(
			'judul' => "Dashboard",
			// Tampil ALL DATA
			'bank'=> $this->m_bank->tampil(),
			// Tampil SELEKSI JB-HARGA
			'filterBS' => $this->db->like('jb_harga','Bank Syariah'),
			'filterBS'=> $this->m_bank->tampil(),
			'filterBK' => $this->db->like('jb_harga','Bank Konvensional'),
			'filterBK'=> $this->m_bank->tampil(),
			// Tampil SELEKSI JB-FUNGSI
			'filterBU' => $this->db->like('jb_fungsi','Bank Umum'),
			'filterBU'=> $this->m_bank->tampil(),
			'filterBST' => $this->db->like('jb_fungsi','Bank Sentral'),
			'filterBST'=> $this->m_bank->tampil(),
			'filterBPR' => $this->db->like('jb_fungsi','Bank Perkreditan Rakyat'),
			'filterBPR'=> $this->m_bank->tampil(),
			// Tampil SELEKSI JB-KEPEMILIKAN
			'filterBMP' => $this->db->like('jb_kepemilikan','Bank Milik Pemerintah'),
			'filterBMP'=> $this->m_bank->tampil(),
			'filterBSMN' => $this->db->like('jb_kepemilikan','Bank Swasta Milik Nasional'),
			'filterBSMN'=> $this->m_bank->tampil(),
			'filterBPD' => $this->db->like('jb_kepemilikan','Bank Pembangunan Daerah'),
			'filterBPD'=> $this->m_bank->tampil(),
			'filterBA' => $this->db->like('jb_kepemilikan','Bank Asing'),
			'filterBA'=> $this->m_bank->tampil(),
			'filterBMC' => $this->db->like('jb_kepemilikan','Bank Milik Campuran'),
			'filterBMC'=> $this->m_bank->tampil(),

		);
		// search
		$keyword = $this->input->post('keyword');
		$data['products']=$this->m_bank->get_product_keyword($keyword);
		// load vw_bank
		$this->load->view("layout/header");
		$this->load->view("bank/vw_bank",$data, FALSE);
		$this->load->view("layout/footer");
	}
}
