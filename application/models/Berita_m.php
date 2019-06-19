<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_m extends CI_Model {

	public function tampil($id=null)
	{
		$this->db->order_by('id', 'DESC');
		$this->db->limit(4);
		$query = $this->db->get('tb_berita');

		if( $id != null ){
			$query = $this->db->get_where('tb_berita', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($slug, $foto)
	{
		$data = [
			'judul'    => $this->input->post('judul', true),
			'isi'      => $this->input->post('isi', true),
			'penulis'  => $this->input->post('penulis', true),
			'slug'     => $slug,
			'hari_post' => hari(),
			'tgl_post' => tgl(date('d-m-Y')),
			'jam_post' => date('H:i'),
			'foto'     => $foto
		];

		$this->db->insert('tb_berita', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('tb_berita', ['id'=>$id]);
	}

}