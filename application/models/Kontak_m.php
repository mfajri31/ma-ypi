<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_kontak');

		if( $id != null ){
			$query = $this->db->get_where('tb_kontak', ['id'=>$id]);
		}

		return $query;
	}

	public function edit($id)
	{
		$data = [
			'email'  => $this->input->post('email'),
			'telp'   => $this->input->post('telp'),
			'alamat' => $this->input->post('alamat')
		];

		$this->db->where('id', $id);
		$this->db->update('tb_kontak', $data);
	}
}