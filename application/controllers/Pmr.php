<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'PMR';
		$this->template->frontend('frontend/ekstrakurikuler/pmr', $data);
	}
}
