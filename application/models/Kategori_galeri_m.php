<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_galeri_m extends CI_Model {

	public function tampil_frontend($id=null, $limit=null)
	{
		if( $limit != null ){
            $this->db->limit($limit);
        }

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_kategori_galeri');

        if( $id !=null ){
            $query = $this->db->get_where('tb_kategori_galeri', ['id'=>$id]);
        }

		return $query;
	}

	public function tampil($id=null)
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('tb_kategori_galeri');

		if( $id != null ){
			$query = $this->db->get_where('tb_kategori_galeri', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($foto)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'slug' => url_title($this->input->post('nama'), 'dash', TRUE),
			'foto' => $foto
		];

		$this->db->insert('tb_kategori_galeri', $data);
	}

	public function edit($id, $foto=null)
	{
		$data['nama']    = $this->input->post('nama');

		if( $foto != null ){
			$data['foto'] = $foto;
		}

		$this->db->where('id', $id);
		$this->db->update('tb_kategori_galeri', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('tb_kategori_galeri', ['id'=>$id]);
	}
}
	
