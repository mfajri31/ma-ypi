<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function tampil($id=null, $email=null)
	{
		$query = $this->db->get('tb_user');

		if( $id != null ){
			$query = $this->db->get_where('tb_user', ['id'=>$id]);
		}
		
		if( $email != null ){
			$query = $this->db->get_where('tb_user', ['email'=>$email]);	
		}

		return $query;
	}

	public function tambah()
	{
		$data = [
			'nama'     => $this->input->post('nama'),
			'email'    => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'level'    => 'admin',
			'status'   => 0,
			'foto'     => 'default.jpg'
		];

		$this->db->insert('tb_user', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('tb_user', ['id'=>$id]);
	}
}