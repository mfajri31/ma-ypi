<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_m extends CI_Model {

	public function tampil($id=null){
		$this->db->order_by('id', 'DESC');
        $this->db->limit(8);
		$query = $this->db->get('tb_galeri');

		if( $id != null ){
			$query = $this->db->get_where('tb_galeri', ['id'=>$id]);
		}

		return $query;
	}

	public function tambah($foto=[])
	{
        $this->db->insert_batch('tb_galeri', $foto);
    }

    public function edit($id, $foto)
    {
    	$this->db->set('foto', $foto);
    	$this->db->where('id', $id);
    	$this->db->update('tb_galeri');
    }

    public function hapus($id)
    {
    	$this->db->delete('tb_galeri', ['id'=>$id]);
    }
}
