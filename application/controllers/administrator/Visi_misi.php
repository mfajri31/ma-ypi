<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Visi_misi_m');
	}

	public function index()
	{
		$data['title']     = 'Visi dan Misi';
		$data['visi_misi'] = $this->Visi_misi_m->tampil()->result_array();
		$this->template->backend('backend/profil/visi_misi/index', $data);
	}

	public function edit($id)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']     = 'Edit Visi dan Misi';
			$data['visi_misi'] = $this->Visi_misi_m->tampil($id)->row_array();
			$this->template->backend('backend/profil/visi_misi/edit', $data);
		} else {
			$this->Visi_misi_m->edit($id);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Visi dan Misi telah diedit!</div>');

			redirect('administrator/visi_misi');
		}
	}
}
