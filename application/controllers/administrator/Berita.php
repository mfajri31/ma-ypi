<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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

				redirect('administrator/berita');
			} else {
				$this->session->set_flashdata('error_foto', '<div class="text-danger">Foto tidak boleh kosong</div>');
				$data['title'] = 'Tambah Berita';
				$this->template->backend('backend/berita/tambah', $data);
			}
		}
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

    public function hapus($id)
    {
    	$this->Berita_m->hapus($id);
    	redirect('administrator/berita');
    }
}
