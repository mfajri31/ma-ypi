<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Fasilitas_m');

		$data['title'] = 'Fasilitas';
		$data['fasilitas'] = $this->Fasilitas_m->tampil()->row_array();
		$this->template->frontend('frontend/profil/fasilitas', $data);
	}
}