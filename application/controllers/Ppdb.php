<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Ppdb_m');

		$data['title'] = 'PPDB';
		$data['ppdb']  = $this->Ppdb_m->tampil()->row_array();
		$this->template->frontend('frontend/ppdb', $data);
	}
}
