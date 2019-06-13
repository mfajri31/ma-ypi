<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Prestasi Siswa';
		$this->template->frontend('frontend/prestasi_siswa', $data);
	}
}
