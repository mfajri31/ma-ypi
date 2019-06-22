<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Galeri_m');
	}

	public function index()
	{
		$data['title']  = 'Galeri';
		$data['galeri'] = $this->Galeri_m->tampil()->result_array();
		$this->template->backend('backend/galeri/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Galeri';
		$this->template->backend('backend/galeri/tambah', $data);

		if( isset($_POST['submit']) ){
			$filesCount = count($_FILES['files']['name']);

			for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['files']['name'][$i];
				$_FILES['file']['type']     = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error']    = $_FILES['files']['error'][$i];
				$_FILES['file']['size']     = $_FILES['files']['size'][$i];

				$config['upload_path']   = './assets/img/galeri/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = 8000;
				$config['encrypt_name']  = true;
			    
			    $this->load->library('upload', $config);
				$this->upload->initialize($config);

				if( $this->upload->do_upload('file') ){
					$foto = $this->upload->data();
					$uploadData[$i]['foto'] = $foto['file_name'];
				}
			}

			if( !empty($uploadData) ){
				$this->Galeri_m->tambah($uploadData);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $filesCount .' foto baru ditambahkan!</div>');

				redirect('administrator/galeri');
			}

        }
	}

	public function edit($id)
	{
		$data['title']  = 'Edit Galeri';
		$data['galeri'] = $this->Galeri_m->tampil($id)->row_array();
		$this->template->backend('backend/galeri/edit', $data);

		if( isset($_POST['submit']) ){
			$file = $_FILES['foto']['name'];

			if( $file ){
				$config['upload_path']   = './assets/img/galeri/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = 8000;
				$config['encrypt_name']  = true;
			    
			    $this->load->library('upload', $config);
				$this->upload->initialize($config);

				if( $this->upload->do_upload('foto') ){
					$foto      = $this->upload->data('file_name');
					$galeri    = $this->Galeri_m->tampil($id)->row_array();
					$old_image = $galeri['foto'];

					unlink("assets/img/galeri/".$old_image);

					$this->Galeri_m->edit($id, $foto);
				}
			}

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Foto telah diedit!</div>');

			redirect('administrator/galeri');
		}
	}

	public function hapus($id)
	{

		$galeri    = $this->Galeri_m->tampil($id)->row_array();
		$old_image = $galeri['foto'];

		unlink("assets/img/galeri/".$old_image);

		$this->Galeri_m->hapus($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Foto telah dihapus!</div>');

		redirect('administrator/galeri');
	}
}
