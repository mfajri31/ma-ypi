<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Berita_m');
	}

	public function index()
	{
		$data['title'] = 'Berita';
		$data['berita'] = $this->Berita_m->tampil()->result_array();
		$this->template->backend('backend/berita/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[tb_berita.judul]');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('is_unique', '%s tersebut telah ada');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Tambah Berita';
			$this->template->backend('backend/berita/tambah', $data);
		} else {
			$file = $_FILES['foto']['name'];

			if( $file ){
				$slug = url_title($this->input->post('judul'), 'dash', TRUE);
				$foto = $this->_do_upload();
				$this->Berita_m->tambah($slug, $foto);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Berita baru telah ditambahkan!</div>');

				redirect('administrator/berita');
			} else {
				$this->session->set_flashdata('error_foto', '<div class="text-danger">Foto tidak boleh kosong</div>');
				$data['title'] = 'Tambah Berita';
				$this->template->backend('backend/berita/tambah', $data);
			}
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('is_unique', '%s tersebut telah ada');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']  = 'Edit Berita';
			$data['berita'] = $this->Berita_m->tampil($id)->row_array();
			$this->template->backend('backend/berita/edit', $data);
		} else {
			$judul = $this->input->post('judul');
			$isi   = $this->input->post('isi');
			$foto  = $_FILES['foto']['name'];

			if( $foto ){
				$berita    = $this->Berita_m->tampil($id)->row_array();
				$old_image = $berita['foto'];

				$foto = $this->_do_upload();
				unlink("assets/img/berita/".$old_image);

				$this->db->set('foto', $foto);
			} 

			$this->db->set('judul', $judul);
			$this->db->set('isi', $isi);
			$this->db->where('id', $id);
			$this->db->update('tb_berita');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Berita telah diedit!</div>');

			redirect('administrator/berita');
		}
	}

    public function hapus($id)
    {
    	$berita = $this->Berita_m->tampil($id, null)->row_array();
    	$old_image = $berita['foto'];

    	unlink("assets/img/berita/".$old_image);

    	$this->Berita_m->hapus($id);

    	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Berita telah dihapus!</div>');

    	redirect('administrator/berita');
    }

    private function _do_upload()
    {
		$config['upload_path']   = './assets/img/berita/';
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

