<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Guru_m');
	}

	public function index()
	{
		$data['title'] = 'Guru';
		$data['guru']  = $this->Guru_m->tampil()->result_array();
		$this->template->backend('backend/guru/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Tambah Guru';
			$this->template->backend('backend/guru/tambah', $data);		
		} else {
			$file = $_FILES['foto']['name'];

			if( $file ){
				$foto = $this->_do_upload();

				$this->Guru_m->tambah($foto);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Guru baru telah ditambahkan!</div>');

				redirect('administrator/guru');
			} else {
				$this->session->set_flashdata('error_foto', '<div class="text-danger">Foto tidak boleh kosong</div>');
				$data['title'] = 'Tambah Guru';
				$this->template->backend('backend/guru/tambah', $data);
			}
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Edit Guru';
			$data['guru']  = $this->Guru_m->tampil($id)->row_array();
			$this->template->backend('backend/guru/edit', $data);		
		} else {
			$nama    = addslashes($this->input->post('nama'));
			$jabatan = addslashes($this->input->post('jabatan'));
			$mapel   = addslashes($this->input->post('mapel'));
			$jum_jam = $this->input->post('jum_jam');
			$file    = $_FILES['foto']['name'];

			if( $file ){
				$guru      = $this->Guru_m->tampil($id)->row_array();
				$old_image = $guru['foto'];

				$foto = $this->_do_upload();
				unlink("assets/img/guru/".$old_image);

				$this->db->set('foto', $foto);
			} 

			$this->db->set('nama', $nama);
			$this->db->set('jabatan', $jabatan);
			$this->db->set('mapel', $mapel);
			$this->db->set('jum_jam', $jum_jam);
			$this->db->where('id', $id);
			$this->db->update('tb_guru');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Guru telah diedit!</div>');

			redirect('administrator/guru');
		}
	}

	public function hapus($id)
	{
		$guru      = $this->Guru_m->tampil($id)->row_array();
		$old_image = $guru['foto'];

		unlink("assets/img/guru/".$old_image);

		$this->Guru_m->hapus($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Guru telah dihapus!</div>');

		redirect('administrator/guru');
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/guru/';
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
