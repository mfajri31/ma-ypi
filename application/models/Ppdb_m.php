<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_ppdb');

		if( $id != null ){
			$query = $this->db->get_where('tb_ppdb', ['id'=>$id]);
		}

		return $query;
	}
}