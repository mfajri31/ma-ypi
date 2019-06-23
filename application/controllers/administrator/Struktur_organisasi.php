<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Struktur_m');
	}

	public function index()
	{
		$data['title']    = 'Struktur Organisasi';
		$data['struktur'] = $this->Struktur_m->tampil()->result_array();
		$this->template->backend('backend/profil/struktur_organisasi/index', $data);
	}

	public function edit($id)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']    = 'Edit Struktur';
			$data['struktur'] = $this->Struktur_m->tampil($id)->row_array();
			$this->template->backend('backend/profil/struktur_organisasi/edit', $data);
		} else {
			$judul = $this->input->post('judul');
			$foto  = $_FILES['foto']['name'];

			if( $foto ){
				$struktur  = $this->Struktur_m->tampil($id)->row_array();
				$old_image = $struktur['foto'];

				$foto = $this->_do_upload();
				unlink("assets/img/struktur/".$old_image);

				$this->db->set('foto', $foto);
			}

			$this->db->set('judul', $judul);
			$this->db->where('id', $id);
			$this->db->update('tb_struktur');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Struktur Organisasi telah diedit!</div>');

			redirect('administrator/struktur_organisasi');

		}

	}

    private function _do_upload()
    {
		$config['upload_path']   = './assets/img/struktur/';
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
