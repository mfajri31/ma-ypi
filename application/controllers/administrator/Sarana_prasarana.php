<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarana_prasarana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Sarana_m');
	}

	public function index()
	{
		$data['title']  = 'Sarana dan Prasarana';
		$data['sarana'] = $this->Sarana_m->tampil()->result_array();
		$this->template->backend('backend/profil/sarana_prasarana/index', $data);
	}

	public function edit($id)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']   = 'Edit Sarana dan Prasarana';
			$data['sarana'] = $this->Sarana_m->tampil($id)->row_array();
			$this->template->backend('backend/profil/sarana_prasarana/edit', $data);
		} else {
			$this->Sarana_m->edit($id);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Sarana dan Prasarana telah diedit!</div>');

			redirect('administrator/sarana_prasarana');
		}
	}
}
