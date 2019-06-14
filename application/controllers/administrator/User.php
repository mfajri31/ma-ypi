<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
	}

	public function index()
	{
		$data['title'] = 'User';
		$data['users'] = $this->User_m->get()->result_array();
		$this->template->backend('backend/user/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah User';
		$data['users'] = $this->User_m->get()->result_array();
		$this->template->backend('backend/user/tambah', $data);
	}
}
