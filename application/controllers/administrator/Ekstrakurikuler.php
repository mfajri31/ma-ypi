<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Ekstrakurikuler_m');
	}

	public function index()
	{
		$data['title']           = 'Ekstrakurikuler';
		$data['ekstrakurikuler'] = $this->Ekstrakurikuler_m->tampil()->result_array();
		$this->template->backend('backend/siswa/ekstrakurikuler/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama Ekstrakurikuler', 'required|is_unique[tb_ekstrakurikuler.nama]');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('is_unique', '%s tersebut telah ada');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']           = 'Tambah Ekstrakurikuler';
			$this->template->backend('backend/siswa/ekstrakurikuler/tambah', $data);
		} else {
			$file = $_FILES['foto']['name'];

			if( $file ){
				$foto = $this->_do_upload();
			} else {
				$foto = "default.png";
			}

			$this->Ekstrakurikuler_m->tambah($foto);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Ekstrakurikuler baru telah ditambahkan!</div>');

			redirect('administrator/ekstrakurikuler');
			
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']           = 'Edit Ekstrakurikuler';
			$data['ekstrakurikuler'] = $this->Ekstrakurikuler_m->tampil($id)->row_array();
			$this->template->backend('backend/siswa/ekstrakurikuler/edit', $data);
		} else {
			$nama       = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$foto       = $_FILES['foto']['name'];

			if( $foto ){
				$ekstrakurikuler = $this->Ekstrakurikuler_m->tampil($id)->row_array();
				$old_image       = $ekstrakurikuler['foto'];

				$foto = $this->_do_upload();
				if( $old_image != 'default.png' ){
					unlink("assets/img/ekstrakurikuler/".$old_image);
				}

				$this->db->set('foto', $foto);
			} 

			$this->db->set('nama', $nama);
			$this->db->set('keterangan', $keterangan);
			$this->db->where('id', $id);
			$this->db->update('tb_ekstrakurikuler');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Ekstrakurikuler telah diedit!</div>');

			redirect('administrator/ekstrakurikuler');
		}
	}

	public function hapus($id)
	{
		$ekstrakurikuler = $this->Ekstrakurikuler_m->tampil($id, null)->row_array();
		$old_image       = $ekstrakurikuler['foto'];

		if( $old_image != 'default.png' ){
	    	unlink("assets/img/ekstrakurikuler/".$old_image);
		}

    	$this->Ekstrakurikuler_m->hapus($id);

    	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Ekstrakurikuler telah dihapus!</div>');

		redirect('administrator/ekstrakurikuler');
	}

    private function _do_upload()
    {
		$config['upload_path']   = './assets/img/ekstrakurikuler/';
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
