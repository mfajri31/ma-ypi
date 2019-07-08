<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_prestasi');

		if( $id != null ){
			$query = $this->db->get_where('tb_prestasi', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($foto)
	{
		$data = [
			'judul'      => $this->input->post('judul'),
			'keterangan' => $this->input->post('keterangan'),
			'foto'       => $foto
		];

		$this->db->insert('tb_prestasi', $data);
	}	

	public function hapus($id)
	{
		$this->db->delete('tb_prestasi', ['id'=>$id]);
	}
}