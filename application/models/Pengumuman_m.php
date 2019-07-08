<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_pengumuman');

		if( $id != null ){
			$query = $this->db->get_where('tb_pengumuman', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($slug, $foto)
	{
		$data = [
			'judul' => addslashes($this->input->post('judul')),
			'isi'   => $this->input->post('isi'),
			'slug'  => $slug,
			'foto'  => $foto
		];

		$this->db->insert('tb_pengumuman', $data);
	}	

	public function hapus($id)
	{
		$this->db->delete('tb_pengumuman', ['id'=>$id]);
	}
}