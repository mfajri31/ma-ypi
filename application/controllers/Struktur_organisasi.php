<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Struktur_m');

		$data['title']    = 'Struktur Organisasi';
		$data['struktur'] = $this->Struktur_m->tampil()->row_array();
		$this->template->frontend('frontend/profil/struktur_organisasi', $data);
	}
}