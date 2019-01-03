
<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class Pengumuman extends CI_Controller
	{
		
		public function wisuda($param='')
		{
			$data['Tanggal'] = '17 oktober 2018';
			$data['Dosen'] = 'Pahrul Irfan';
			$data['Tambahan'] = $param;

			$this->load->view('v_pengumuman', $data);
		}
		public function detail(){
			$data['Judul'] = 'Detail Pengumuman';
			$this->load->view('v_detail', $data);
		}
		
	}







 ?>