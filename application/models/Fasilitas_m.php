<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_fasilitas');

		if( $id != null ){
			$query = $this->db->get_where('tb_fasilitas', ['id'=>$id]);
		}

		return $query;
	}

	public function edit($id, $foto=null)
	{
		if( $foto != null ){
			$data = [
				'judul' => $this->input->post('judul', true),
				'isi'   => $this->input->post('isi'),
				'foto'  => $foto
			];
		} else {
			$data = [
				'judul' => $this->input->post('judul', true),
				'isi'   => $this->input->post('isi')
			];
		}

		$this->db->where('id', $id);
		$this->db->update('tb_fasilitas', $data);
	}
}