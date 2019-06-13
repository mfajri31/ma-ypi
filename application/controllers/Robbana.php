<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Robbana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Robbana';
		$this->template->frontend('frontend/ekstrakurikuler/robbana', $data);
	}
}
