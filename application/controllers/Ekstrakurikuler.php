<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Ekstrakurikuler';
		$this->template->frontend('frontend/ekstrakurikuler', $data);
	}
}
