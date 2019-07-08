<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Pengumuman_m');
	}

	public function index()
	{
		$data['title']      = 'Pengumuman';
		$data['pengumuman'] = $this->Pengumuman_m->tampil()->result_array();
		$this->template->backend('backend/pengumuman/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[tb_pengumuman.judul]');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('is_unique', '%s tersebut telah ada');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']      = 'Tambah Pengumuman';
			$this->template->backend('backend/pengumuman/tambah', $data);
		} else {
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			$foto = $_FILES['foto']['name'];

			if( $foto ){
				$foto = $this->_do_upload();
			} else {
				$foto = 'none';
			}

			$this->Pengumuman_m->tambah($slug, $foto);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengumuman baru telah ditambahkan!</div>');

			redirect('administrator/pengumuman');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']      = 'Tambah Pengumuman';
			$data['pengumuman'] = $this->Pengumuman_m->tampil($id)->row_array();
			$this->template->backend('backend/pengumuman/edit', $data);
		} else {
			$judul = $this->input->post('judul');
			$isi   = $this->input->post('isi');
			$slug  = url_title($judul, 'dash', TRUE);
			$foto  = $_FILES['foto']['name'];

			if( $foto ){
				$pengumuman = $this->Pengumuman_m->tampil($id)->row_array();
				$old_image  = $pengumuman['foto'];

				$foto = $this->_do_upload();
				unlink("assets/img/pengumuman/".$old_image);

				$this->db->set('foto', $foto);
			}

			$this->db->set('judul', $judul);
			$this->db->set('isi', $isi);
			$this->db->set('slug', $slug);
			$this->db->where('id', $id);
			$this->db->update('tb_pengumuman');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengumuman telah diedit!</div>');

			redirect('administrator/pengumuman');
		}
	}

	public function hapus($id)
	{
		$pengumuman = $this->Pengumuman_m->tampil($id)->row_array();
		$old_image  = $pengumuman['foto'];

    	unlink("assets/img/pengumuman/".$old_image);

    	$this->Pengumuman_m->hapus($id);

    	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengumuman telah dihapus!</div>');

		redirect('administrator/pengumuman');
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/pengumuman/';
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
