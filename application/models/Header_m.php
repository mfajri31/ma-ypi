<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_header');

		if( $id != null ){
			$query = $this->db->get_where('tb_header', ['id'=>$id]);
		}

		return $query;
	}
}