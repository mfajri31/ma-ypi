<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_guru');

		if( $id != null ){
			$query = $this->db->get_where('tb_guru', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($foto)
	{
		$data = [
			'nama'    => addslashes($this->input->post('nama')),
			'jabatan' => addslashes($this->input->post('jabatan')),
			'mapel'   => addslashes($this->input->post('mapel')),
			'jum_jam' => $this->input->post('jum_jam'),
			'foto'    => $foto
		];

		$this->db->insert('tb_guru', $data);
	}	

	public function hapus($id)
	{
		$this->db->delete('tb_guru', ['id'=>$id]);
	}
}