<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_data extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bank');
	}
	
	public function index()
	{
		$data = array(
            'judul' => "Data Bank",
			'bank' => $this->m_bank->tampil()
		);
        $this->load->view("layout/header");
		$this->load->view("bank/vw_databank",$data, FALSE);
        $this->load->view("layout/footer");
	}

    public function tambah()
    {
		//Validasi Data Tidak Boleh Kosong
			$this->form_validation->set_rules('nama', 'nama Bank', 'required',array(
			'required' => 'Nama Bank Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jb_harga', 'JB Harga', 'required',array(
			'required' => 'JB Harga Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jb_kepemilikan', 'JB Kepemilikan', 'required',array(
			'required' => 'JB Kepemilikan Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jb_fungsi', 'JB Fungsi', 'required',array(
			'required' => 'JB Fungsi Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jml_pendapatan', 'JML Pendapatan', 'required',array(
			'required' => 'JML Pendapatan Wajib di isi!!!'));
			
			$this->form_validation->set_rules('latitude', 'Latitude', 'required',array(
			'required' => 'Latitude Wajib di isi!!!'));
			
			$this->form_validation->set_rules('longitude', 'Longitude', 'required',array(
			'required' => 'Longitude Wajib di isi!!!'));
			
			$this->form_validation->set_rules('link_foto', 'Foto', 'required',array(
			'required' => 'Format Link upload Foto Drive --> https://drive.google.com/uc?export=view&id= [masukan id'));
			
		if($this->form_validation->run()== FALSE){
			$data = array(
            'judul' => "Data Bank"
		);
		$this->load->view("layout/header");
		$this->load->view("bank/vw_tambahbank",$data, FALSE);
        $this->load->view("layout/footer");
		}else{
			$data = array(
				'nama' => $this->input->post('nama'),
				'jb_harga' => $this->input->post('jb_harga'),
				'jb_kepemilikan' => $this->input->post('jb_kepemilikan'),
				'jb_fungsi' => $this->input->post('jb_fungsi'),
				'jml_pendapatan' => $this->input->post('jml_pendapatan'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude'),
				'link_foto' => $this->input->post('link_foto')
			);
			$this->m_bank->simpan($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Ditambah!</div>');
			redirect('home/');
			
			
		}

    }

	public function edit($no)
	{

			//Validasi Data Tidak Boleh Kosong
			$this->form_validation->set_rules('nama', 'nama Bank', 'required',array(
			'required' => 'Nama Bank Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jb_harga', 'JB Harga', 'required',array(
			'required' => 'JB Harga Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jb_kepemilikan', 'JB Kepemilikan', 'required',array(
			'required' => 'JB Kepemilikan Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jb_fungsi', 'JB Fungsi', 'required',array(
			'required' => 'JB Fungsi Wajib di isi!!!'));
			
			$this->form_validation->set_rules('jml_pendapatan', 'JML Pendapatan', 'required',array(
			'required' => 'JML Pendapatan Wajib di isi!!!'));
			
			$this->form_validation->set_rules('latitude', 'Latitude', 'required',array(
			'required' => 'Latitude Wajib di isi!!!'));
			
			$this->form_validation->set_rules('longitude', 'Longitude', 'required',array(
			'required' => 'Longitude Wajib di isi!!!'));
			
			$this->form_validation->set_rules('link_foto', 'Foto', 'required',array(
			'required' => 'Format Link upload Foto Drive --> https://drive.google.com/uc?export=view&id= [masukan id'));

				if($this->form_validation->run()== FALSE){
			$data = array(
            'judul' => "Update Data Bank",
			'bank'=> $this->m_bank->detail($no)
		);
		 $this->load->view("layout/header");
		$this->load->view("bank/vw_updatebank",$data, FALSE);
        $this->load->view("layout/footer");
		}else{
			$data = array(
				'no' => $no,
				'nama' => $this->input->post('nama'),
				'jb_harga' => $this->input->post('jb_harga'),
				'jb_kepemilikan' => $this->input->post('jb_kepemilikan'),
				'jb_fungsi' => $this->input->post('jb_fungsi'),
				'jml_pendapatan' => $this->input->post('jml_pendapatan'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude'),
				'link_foto' => $this->input->post('link_foto')
			);
			$this->m_bank->edit($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Bank Berhasil Diupdate!</div>');
			redirect('bank_data');
			
			
		}
       
	}

	public function hapus($no)
	{
		$data = array('no'=>$no);
		$this->m_bank->hapus($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
		redirect('Bank_data');

	}

	public function detail($no)
	{
		$data = array(
			'judul' => "DETAIL BANK",
			'bank'=> $this->m_bank->detail($no),

		);
		$this->load->view("layout/header");
		$this->load->view("bank/vw_detail",$data, FALSE);
		$this->load->view("layout/footer");
	}

}


