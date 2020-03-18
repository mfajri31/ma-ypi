<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Foto_galeri_m');
		$this->load->model('Kategori_galeri_m');
	}

	public function index()
	{
		$data['title']  = 'Foto Galeri';
		$data['foto_galeri'] = $this->Foto_galeri_m->tampil_relasi()->result_array();
		$data['jumlah'] = count($this->Foto_galeri_m->tampil()->result_array());
		$this->template->backend('backend/galeri/foto_galeri/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Galeri';
		$data['kategori_galeri'] = $this->Kategori_galeri_m->tampil()->result_array();
		$this->template->backend('backend/galeri/foto_galeri/tambah', $data);

		if( isset($_POST['submit']) ){
			$filesCount      = count($_FILES['files']['name']);

			for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['files']['name'][$i];
				$_FILES['file']['type']     = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error']    = $_FILES['files']['error'][$i];
				$_FILES['file']['size']     = $_FILES['files']['size'][$i];

				$config['upload_path']   = './assets/img/galeri/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = 8000;
				$config['quality']       = '50%'; 
				$config['encrypt_name']  = true;
			    
			    $this->load->library('upload', $config);
				$this->upload->initialize($config);

				if( $this->upload->do_upload('file') ){
					$foto                   = $this->upload->data();
					$uploadData[$i]['foto'] = $foto['file_name'];
					$kategori_galeri        = $this->input->post('kategori');

				}
			}

			if( !empty($uploadData) ){
				$this->Foto_galeri_m->tambah($uploadData, $kategori_galeri);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $filesCount .' foto baru ditambahkan!</div>');

				redirect('administrator/foto_galeri');
			}

        }
	}

	public function edit($id)
	{
		$data['title']           = 'Edit Foto Galeri';
		$data['kategori_galeri'] = $this->Kategori_galeri_m->tampil()->result_array();
		$data['foto_galeri']     = $this->Foto_galeri_m->tampil($id)->row_array();
		$this->template->backend('backend/galeri/foto_galeri/edit', $data);

		if( isset($_POST['submit']) ){
			$foto = $_FILES['foto']['name'];

			if( $foto ){
				$galeri   = $this->Foto_galeri_m->tampil($id)->row_array();
				$old_foto = $galeri['foto'];
		    	unlink("assets/img/galeri/".$old_foto);

		    	$foto = $this->_do_upload();
				$this->Foto_galeri_m->edit($id,$foto);
			} else {
				$this->Foto_galeri_m->edit($id,$foto);
			}

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Foto telah diedit!</div>');

	    	redirect('administrator/foto_galeri');
		}
	}

	// public function hapus($id)
	// {
	// 	$galeri    = $this->Foto_galeri_m->tampil($id)->row_array();
	// 	$old_image = $galeri['foto'];

	// 	unlink("assets/img/galeri/".$old_image);

	// 	$this->Foto_galeri_m->hapus($id);

	// 	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Foto telah dihapus!</div>');

	// 	redirect('administrator/foto_galeri');
	// }

	public function bulk_delete()
	{
		$id     = $this->input->post('id');

		foreach ( $id as $id ) {
			$galeri    = $this->Foto_galeri_m->tampil($id)->row_array();
			$old_image = $galeri['foto'];

			unlink("assets/img/galeri/".$old_image);

			$this->Foto_galeri_m->hapus($id);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Foto telah dihapus!</div>');

		redirect('administrator/foto_galeri');
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/galeri/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = 8000;
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
