<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_unggulan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Program_m');

		$data['title']   = 'Program Unggulan';
		$data['program'] = $this->Program_m->tampil()->row_array();
		$this->template->frontend('frontend/program_unggulan', $data);
	}
}
