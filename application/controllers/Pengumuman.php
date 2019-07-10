<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_m');
	}

	public function index()
	{
		$data['title']      = 'Pengumuman';
		$data['pengumuman'] = $this->Pengumuman_m->tampil()->result_array();
		$this->template->frontend('frontend/pengumuman/index', $data);
	}

	public function read($id)
	{
		$data['title']      = 'Pengumuman';
		$data['pengumuman'] = $this->Pengumuman_m->tampil($id)->row_array();
		$this->template->frontend('frontend/pengumuman/read', $data);
	}
}
