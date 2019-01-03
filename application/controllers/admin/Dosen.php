<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Dosen extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');
	
	}
	
	public function index()
	{
		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Halaman Dosen';
		$data['halaman'] = 'admin/v_dosen';

		$data['isi_tabel']=$this->Dosen_model->all();

		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
	{
		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Tambah Dosen';
		$data['halaman'] = 'admin/v_dosen_tambah';

		$data['isi_tabel']=$this->Dosen_model->all();

		$this->load->view('admin/v_template', $data);
	}

	public function proses_tambah()
	{
		$obj = array(
			'nik' => $this->input->post('nik'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'alamat' => $this->input->post('alamat')
		);

		$this->Dosen_model->create($obj);

		redirect('admin/dosen','refresh');
	}


	public function hapus($nik='')
	{
		$this->Dosen_model->remove($nik);

		redirect('admin/dosen','refresh');
	}

	public function edit($nik)
	{
		$data['judul'] = 'Edit';
		$data['sub_judul'] = 'Edit data Dosen';
		$data['halaman'] = 'admin/v_dosen_edit';

		$data['isi_data'] = $this->Dosen_model->get_id($nik);

		$this->load->view('admin/v_template', $data);
	}

	public function proses_Edit()
	{
		$id = $this->input->post('nik');
		$obj = array(
			'nama_dosen' => $this->input->post('nama_dosen'),
			'alamat' => $this->input->post('alamat')
		);

		$this->Dosen_model->update($id, $obj);

		redirect('admin/dosen','refresh');
	}
}







 ?>