<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarana_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_sarana');

		if( $id != null ){
			$query = $this->db->get_where('tb_sarana', ['id'=>$id]);
		}

		return $query;
	}

	public function edit($id)
	{
		$data = [
			'judul' => $this->input->post('judul', true),
			'isi'   => $this->input->post('isi')
		];

		$this->db->where('id', $id);
		$this->db->update('tb_sarana', $data);
	}
}