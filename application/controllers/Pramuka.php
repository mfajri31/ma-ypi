<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pramuka extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Pramuka';
		$this->template->frontend('frontend/ekstrakurikuler/pramuka', $data);
	}
}
