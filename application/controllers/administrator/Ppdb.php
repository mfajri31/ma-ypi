<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Ppdb_m');
	}

	public function index()
	{
		$data['title']    = 'PPDB';
		$data['ppdb'] = $this->Ppdb_m->tampil()->result_array();
		$this->template->backend('backend/ppdb/index', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Edit PPDB';
			$data['ppdb'] = $this->Ppdb_m->tampil($id)->row_array();
			$this->template->backend('backend/ppdb/edit', $data);
		} else {
			$judul = $this->input->post('judul');
			$isi   = $this->input->post('isi');
			$foto  = $_FILES['foto']['name'];

			if( $foto ){
				$foto      = $this->_do_upload();
				$ppdb      = $this->Ppdb_m->tampil($id)->row_array();
				$old_image = $ppdb['foto'];

				unlink("assets/img/ppdb/".$old_image);

				$this->db->set('foto', $foto);
			}

			$this->db->set('judul', $judul);
			$this->db->set('isi', $isi);
			$this->db->where('id', $id);
			$this->db->update('tb_ppdb');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> PPDB telah diedit!</div>');

			redirect('administrator/ppdb');
		}
	}

	public function hapus_gambar($id)
	{
		$ppdb      = $this->Ppdb_m->tampil($id)->row_array();
		$old_image = $ppdb['foto'];

		unlink("assets/img/ppdb/".$old_image);

		$this->db->set('foto', 'none');
		$this->db->where('id', $id);
		$this->db->update('tb_ppdb');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Foto PPDB telah dihapus!</div>');

		redirect('administrator/ppdb');

	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/ppdb/';
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