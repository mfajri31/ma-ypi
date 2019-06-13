<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seni_baca_quran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Seni Baca Al-Qur'an";
		$this->template->frontend('frontend/ekstrakurikuler/seni_baca_quran', $data);
	}
}
