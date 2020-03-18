<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token_m extends CI_Model {

	public function tampil($token=null)
	{
		$query = $this->db->get('tb_token');

		if( $token != null ){
			$query = $this->db->get_where('tb_token', ['token'=>$token]);
		}

		return $query;
	}

	public function tambah($email, $token)
	{
		$data = [
			'email'        => $email,
			'token'        => $token,
			'date_created' => time()
		];

		$this->db->insert('tb_token', $data);
	}

	public function hapus($token)
	{
		$this->db->delete('tb_token', ['token'=>$token]);
	}
}