<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaligrafi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Kaligrafi';
		$this->template->frontend('frontend/ekstrakurikuler/kaligrafi', $data);
	}
}
