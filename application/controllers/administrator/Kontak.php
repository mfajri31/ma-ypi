<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Kontak_m');
	}

	public function index()
	{
		$data['title']  = 'Kontak';
		$data['kontak'] = $this->Kontak_m->tampil()->result_array();
		$this->template->backend('backend/kontak/index', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('valid_email', 'Format %s tidak benar');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']  = 'Edit Kontak';
			$data['kontak'] = $this->Kontak_m->tampil($id)->row_array();
			$this->template->backend('backend/kontak/edit', $data);
		} else {
			$this->Kontak_m->edit($id);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Kontak telah diedit!</div>');

			redirect('administrator/kontak');
		}

	}
}
