<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_unggulan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Program_m');
	}

	public function index()
	{
		$data['title']   = 'Program Unggulan';
		$data['program'] = $this->Program_m->tampil()->result_array();
		$this->template->backend('backend/program_unggulan/index', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Edit Program';
			$data['program'] = $this->Program_m->tampil($id)->row_array();
			$this->template->backend('backend/program_unggulan/edit', $data);
		} else {
			$judul      = $this->input->post('judul');
			$keterangan = $this->input->post('keterangan');
			$foto       = $_FILES['foto']['name'];

			if( $foto ){
				$program   = $this->Program_m->tampil($id)->row_array();
				$old_image = $program['foto'];

				$foto = $this->_do_upload();
				unlink("assets/img/program/".$old_image);

				$this->db->set('foto', $foto);
			} 

			$this->db->set('judul', $judul);
			$this->db->set('keterangan', $keterangan);
			$this->db->where('id', $id);
			$this->db->update('tb_program_unggulan');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Program Unggulan telah diedit!</div>');

			redirect('administrator/program_unggulan');
		}
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/program/';
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
