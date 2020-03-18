<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_sambutan');

		if( $id != null ){
			$query = $this->db->get_where('tb_sambutan', ['id'=>$id]);
		}

		return $query;
	}
}