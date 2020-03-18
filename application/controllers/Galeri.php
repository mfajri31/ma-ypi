<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_galeri_m');
		$this->load->model('Foto_galeri_m');
	}

	public function index()
	{
		$data['title']           = 'Galeri';
		$data['kategori_galeri'] = $this->Kategori_galeri_m->tampil()->result_array();
		$this->template->frontend('frontend/galeri', $data);
	}

	public function view()
	{
		$kategori = $this->uri->segment(2);

		$data['title']         = 'Galeri';
		$data['galeri']        = $this->Foto_galeri_m->tampil_frontend($kategori)->result_array();
		$data['galeri_relasi'] = $this->Foto_galeri_m->tampil_relasi($kategori)->result_array();
		$data['kategori']      = $this->Kategori_galeri_m->tampil($kategori)->result_array();
		$this->template->frontend('frontend/galeri_view', $data);
	}
}
