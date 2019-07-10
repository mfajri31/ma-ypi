<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Prestasi_m');

		$data['title']    = 'Prestasi Siswa';
		$data['prestasi'] = $this->Prestasi_m->tampil()->result_array();
		$this->template->frontend('frontend/prestasi_siswa', $data);
	}
}
