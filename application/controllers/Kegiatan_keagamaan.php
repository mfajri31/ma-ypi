<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_keagamaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Kegiatan Keagamaan';
		$this->template->frontend('frontend/ekstrakurikuler/kegiatan_keagamaan', $data);
	}
}
