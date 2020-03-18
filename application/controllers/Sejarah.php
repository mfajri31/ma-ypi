<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Sejarah_m');

		$data['title']   = 'Sejarah';
		$data['sejarah'] = $this->Sejarah_m->tampil()->row_array();
		$this->template->frontend('frontend/profil/sejarah', $data);
	}
}