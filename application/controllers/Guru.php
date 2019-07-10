<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_m');
	}

	public function index()
	{
		$data['title'] = 'Guru';
		$this->template->frontend('frontend/guru', $data);
	}

	public function tampil_guru()
	{
		$guru = $this->Guru_m->tampil()->result_array();
		echo json_encode($guru);
	}

	public function tampil_guru_perId()
	{
		$id = $this->input->post('id');

		$guru = $this->Guru_m->tampil($id)->row_array();
		echo json_encode($guru);
	}
}
