<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_m extends CI_Model {

	public function tampil($id=null)
	{
		$query = $this->db->get('tb_program_unggulan');

		if( $id != null ){
			$query = $this->db->get_where('tb_program_unggulan', ['id'=>$id]);
		}

		return $query;
	}
}