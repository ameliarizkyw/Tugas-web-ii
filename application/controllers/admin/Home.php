
<?php 

class Home extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('admin') != true) {
			redirect('login','refresh');
		}
		$data['judul'] = 'Dashboard';
		$data['sub_judul'] = 'Halaman Utama';
		$data['halaman'] = 'admin/v_index';	

		$this->load->view('admin/v_template', $data);
	}

	public function coba()
	{
		$data['judul'] = 'Coba';
		$data['sub_judul'] = 'Halaman Coba';
		$data['halaman'] = 'admin/v_coba';

		$this->load->view('admin/v_template', $data);
	}

	public function pengumuman()
	{
		$data['judul'] = 'pengumuman';
		$data['sub_judul'] = 'Halaman Pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';

		$this->load->view('admin/v_template', $data);
	}
}






 ?>
