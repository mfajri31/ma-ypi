<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_ekstrakurikuler');

		if( $id != null ){
			$query = $this->db->get_where('tb_ekstrakurikuler', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($foto)
	{
		$data = [
			'nama'       => addslashes($this->input->post('nama')),
			'keterangan' => addslashes($this->input->post('keterangan')),
			'foto'       => $foto
		];

		$this->db->insert('tb_ekstrakurikuler', $data);
	}	

	public function hapus($id)
	{
		$this->db->delete('tb_ekstrakurikuler', ['id'=>$id]);
	}
}