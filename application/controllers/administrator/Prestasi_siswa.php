<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Prestasi_m');
	}

	public function index()
	{
		$data['title']    = 'Prestasi Siswa';
		$data['prestasi'] = $this->Prestasi_m->tampil()->result_array();
		$this->template->backend('backend/siswa/prestasi_siswa/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Tambah Prestasi';
			$this->template->backend('backend/siswa/prestasi_siswa/tambah', $data);
		} else {
			$file = $_FILES['foto']['name'];

			if( $file ){
				$foto = $this->_do_upload();
				$this->Prestasi_m->tambah($foto);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Prestasi baru telah ditambahkan!</div>');

				redirect('administrator/prestasi_siswa');
			} else {
				$this->session->set_flashdata('error_foto', '<div class="text-red">Foto tidak boleh kosong</div>');
				$data['title'] = 'Tambah Prestasi';
				$this->template->backend('backend/siswa/prestasi_siswa/tambah', $data);
			}
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']    = 'Edit Prestasi';
			$data['prestasi'] = $this->Prestasi_m->tampil($id)->row_array();
			$this->template->backend('backend/siswa/prestasi_siswa/edit', $data);
		} else {
			$judul      = $this->input->post('judul');
			$keterangan = $this->input->post('keterangan');
			$foto  = $_FILES['foto']['name'];

			if( $foto ){
				$prestasi  = $this->Prestasi_m->tampil($id)->row_array();
				$old_image = $prestasi['foto'];

				$foto = $this->_do_upload();
				unlink("assets/img/prestasi/".$old_image);

				$this->db->set('foto', $foto);
			} 

			$this->db->set('judul', $judul);
			$this->db->set('keterangan', $keterangan);
			$this->db->where('id', $id);
			$this->db->update('tb_prestasi');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Prestasi telah diedit!</div>');

			redirect('administrator/prestasi_siswa');
		}
	}

	public function hapus($id)
	{
		$prestasi = $this->Prestasi_m->tampil($id, null)->row_array();
    	$old_image = $prestasi['foto'];

    	unlink("assets/img/prestasi/".$old_image);

    	$this->Prestasi_m->hapus($id);

    	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Prestasi telah dihapus!</div>');

		redirect('administrator/prestasi_siswa');
	}

    private function _do_upload()
    {
		$config['upload_path']   = './assets/img/prestasi/';
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
