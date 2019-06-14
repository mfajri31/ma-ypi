<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function get($id=null)
	{
		$query = $this->db->get('tb_user');

		if( $id!=null ){
			$query = $this->db->get_where('tb_user', ['id'=>$id]);
		}

		return $query;
	}
}