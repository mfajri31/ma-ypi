<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Sejarah_m');
	}

	public function index()
	{
		$data['title']   = 'Sejarah';
		$data['sejarah'] = $this->Sejarah_m->tampil()->result_array();
		$this->template->backend('backend/profil/sejarah/index', $data);
	}

	public function edit($id)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']   = 'Edit Sejarah';
			$data['sejarah'] = $this->Sejarah_m->tampil($id)->row_array();
			$this->template->backend('backend/profil/sejarah/edit', $data);
		} else {
			$this->Sejarah_m->edit($id);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Sejarah telah diedit!</div>');

			redirect('administrator/sejarah');
		}
	}
}
