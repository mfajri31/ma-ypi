<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_struktur');

		if( $id != null ){
			$query = $this->db->get_where('tb_struktur', ['id'=>$id]);
		}

		return $query;
	}
}