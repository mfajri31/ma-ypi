<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
	}

	public function index()
	{
		$data['title'] = 'Galeri';
		$this->template->backend('backend/galeri/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Galeri';
		$this->template->backend('backend/galeri/tambah', $data);	
	}

	public function edit()
	{
		$data['title'] = 'Edit Galeri';
		$this->template->backend('backend/galeri/edit', $data);
	}
}
