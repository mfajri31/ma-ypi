<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Struktur Organisasi';
		$this->template->frontend('frontend/profil/struktur_organisasi', $data);
	}
}