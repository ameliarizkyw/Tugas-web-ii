<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengumuman_model extends CI_Model{

	public function all()
	{
		return $this->db->get('pengumuman')->result();
	}
	public function get()
	{

	}
	public function create($objek)
	{
		return $this->db->insert('pengumuman', $objek);
		
	}
	public function update($id, $objek)
	{
		return $this->db->where('id', $id)->update('pengumuman', $objek);
	}
	public function remove($kode)
	{
		return $this->db->delete('pengumuman',array('id' => $kode));
	}

	//delete where id = $kode from pengumuman
	public function get_id($kode){
		return $this->db->where('id', $kode)->get('pengumuman')->row(); 
		//result data lebih dari satu // row satu baris yg diambil
	}

}


 ?>