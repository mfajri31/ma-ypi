<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Galeri_m');

		$data['title']  = 'Galeri';
		$data['galeri'] = $this->Galeri_m->tampil()->result_array();
		$this->template->frontend('frontend/galeri', $data);
	}
}
