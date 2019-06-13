<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Futsal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Futsal';
		$this->template->frontend('frontend/ekstrakurikuler/futsal', $data);
	}
}
