<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Kategori_galeri_m');
	}

	public function index()
	{
		$data['title']           = 'Kategori Galeri';
		$data['kategori_galeri'] = $this->Kategori_galeri_m->tampil()->result_array();
		$this->template->backend('backend/galeri/kategori_galeri/index', $data);
	}

	public function tambah()
	{
		$data['title']           = 'Tambah Kategori Galeri';
		$this->template->backend('backend/galeri/kategori_galeri/tambah');

		if( isset($_POST['submit']) ){
			$foto = $_FILES['foto']['name'];

			if( $foto ){
				$foto = $this->_do_upload();
				$this->Kategori_galeri_m->tambah($foto);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Kategori baru telah ditambahkan!</div>');
    	
		    	redirect('administrator/kategori_galeri');
			}
		}
	}

	public function edit($id)
	{
		$data['title']           = 'Edit Kategori Galeri';
		$data['kategori_galeri'] = $this->Kategori_galeri_m->tampil($id)->row_array();
		$this->template->backend('backend/galeri/kategori_galeri/edit', $data);

		if( isset($_POST['submit']) ){
			$foto = $_FILES['foto']['name'];

			if( $foto ){
				$kategori_galeri = $this->Kategori_galeri_m->tampil($id)->row_array();
				$old_foto        = $kategori_galeri['foto'];
		    	unlink("assets/img/kategori_galeri/".$old_foto);

		    	$foto = $this->_do_upload();
				$this->Kategori_galeri_m->edit($id,$foto);
			} else {
				$this->Kategori_galeri_m->edit($id,$foto);
			} 

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Ketegori telah diedit!</div>');
    	
	    	redirect('administrator/kategori_galeri');
		}
	}

	public function hapus($id)
	{
		$kategori_galeri = $this->Kategori_galeri_m->tampil($id)->row_array();
		$old_foto        = $kategori_galeri['foto'];
    	unlink("assets/img/kategori_galeri/".$old_foto);

    	$this->Kategori_galeri_m->hapus($id);

    	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Kategori telah dihapus!</div>');
    	
    	redirect('administrator/kategori_galeri');
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/kategori_galeri/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = 10000;
		$config['quality']       = '30%';
		$config['encrypt_name']  = true;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('foto') ){
            $error = ['error' => $this->upload->display_errors()];
            print_r($error);
        } else {
            return $this->upload->data('file_name');
        }
    }

}
