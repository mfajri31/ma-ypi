<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Kontak_m');

		$data['title']  = 'Kontak';
		$data['kontak'] = $this->Kontak_m->tampil()->row_array();
		$this->template->frontend('frontend/kontak', $data);
	}
}
