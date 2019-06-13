<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tilawatil_quran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Tilawatil Qur'an";
		$this->template->frontend('frontend/ekstrakurikuler/tilawatil_quran', $data);
	}
}
