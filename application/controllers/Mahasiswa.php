
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa extends CI_Controller{

	public function index()
	{
		echo "ini controller Mahasiswa";
	}


	public function profil()
	{
		echo "Nama : Amelia Rizki Wulandari <br>";
		echo "NIM : 1700310009 <br>";
		echo "Email : ameliarizky131099@gmail.com <br>";
	}


	public function dosen ($param1='')
	{
		echo "Nama Dosen : ".$param1;
	}


	public function krs($semester='', $matkul='')
	{
		echo "Semester ke : ".$semester."<br>Saya mengambil matakuliah : ".$matkul;
	}

	public function get_semester(){
		echo "Semester : 3";
	}

}





 ?>