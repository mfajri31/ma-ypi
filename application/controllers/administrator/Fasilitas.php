<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Fasilitas_m');
	}

	public function index()
	{
		$data['title']  = 'Fasilitas';
		$data['fasilitas'] = $this->Fasilitas_m->tampil()->result_array();
		$this->template->backend('backend/fasilitas/index', $data);
	}

	public function edit($id)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']     = 'Edit Fasilitas';
			$data['fasilitas'] = $this->Fasilitas_m->tampil($id)->row_array();
			$this->template->backend('backend/fasilitas/edit', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if( $foto ){
				$foto      = $this->_do_upload();
				$fasilitas = $this->Fasilitas_m->tampil($id)->row_array();
				$old_foto  = $fasilitas['foto'];

				if( $old_foto ){
					unlink('assets/img/fasilitas/'.$old_foto);
				}

				$this->Fasilitas_m->edit($id, $foto);
			} else {
				$this->Fasilitas_m->edit($id, $foto);
			}

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Fasilitas telah diedit!</div>');

			redirect('administrator/fasilitas');

		}
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/fasilitas/';
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
