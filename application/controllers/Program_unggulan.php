<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_unggulan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Program Unggulan';
		$this->template->frontend('frontend/program_unggulan', $data);
	}
}
