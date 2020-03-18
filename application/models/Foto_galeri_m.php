<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_galeri_m extends CI_Model {

	public function tampil($id=null, $limit=null)
    {
        if( $limit != null ){
            $this->db->limit($limit);
        }

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_foto_galeri');

        if( $id !=null ){
            $query = $this->db->get_where('tb_foto_galeri', ['id'=>$id]);
        }

		return $query;
	}

    public function tampil_frontend($kategori)
    {
        return $query = $this->db->get_where('tb_foto_galeri', ['kategori'=>$kategori]);
    }

    public function tampil_relasi()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori_galeri');
        $this->db->join('tb_foto_galeri', 'tb_foto_galeri.kategori = tb_kategori_galeri.id');
        return $query = $this->db->get();
    }

    public function tambah($foto=[], $kategori=[])
    {
        foreach( $foto as $foto ){
            $data = [
                'foto'     => $foto['foto'],
                'kategori' => $kategori
            ];

            $this->db->insert('tb_foto_galeri', $data);
        }
    }

    public function edit($id, $foto=null)
    {
        if( $foto != null ){
            $data = [
                'foto'       => $foto,
                'kategori'   => $this->input->post('kategori')
            ];
        } else {
            $data = [
                'kategori'   => $this->input->post('kategori')
            ];
        }

        $this->db->where('id', $id);
        $this->db->update('tb_foto_galeri', $data);
    }

    public function hapus($id)
    {
    	$this->db->delete('tb_foto_galeri', ['id'=>$id]);
    }
}
