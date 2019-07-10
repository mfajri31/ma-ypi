<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ekstrakurikuler_m');
	}

	public function index()
	{
		
		$data['title']  = 'Ekstrakurikuler';
		$data['ekskul'] = $this->Ekstrakurikuler_m->tampil()->result_array();
		$this->template->frontend('frontend/ekstrakurikuler/index', $data);
	}

	public function read($id)
	{
		$data['title']  = 'Ekstrakurikuler';
		$data['ekskul'] = $this->Ekstrakurikuler_m->tampil($id)->row_array();
		$this->template->frontend('frontend/ekstrakurikuler/read_ekskul', $data);
	}
}
