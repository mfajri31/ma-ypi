<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Sambutan_m');
	}

	public function index()
	{
		$data['title']    = 'Sambutan';
		$data['sambutan'] = $this->Sambutan_m->tampil()->result_array();
		$this->template->backend('backend/beranda/sambutan/index', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Edit Sambutan';
			$data['sambutan'] = $this->Sambutan_m->tampil($id)->row_array();
			$this->template->backend('backend/beranda/sambutan/edit', $data);
		} else {
			$judul = $this->input->post('judul');
			$isi   = $this->input->post('isi');
			$image = $_FILES['foto']['name'];

			if( $image ){
				$foto      = $this->_do_upload();
				$sambutan  = $this->Sambutan_m->tampil($id)->row_array();
				$old_image = $sambutan['foto'];

				unlink("assets/img/sambutan/".$old_image);

				$this->db->set('foto', $foto);
			}

			$this->db->set('judul', $judul);
			$this->db->set('isi', $isi);
			$this->db->where('id', $id);
			$this->db->update('tb_sambutan');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Sambutan telah diedit!</div>');

			redirect('administrator/sambutan');
		}
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/sambutan/';
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