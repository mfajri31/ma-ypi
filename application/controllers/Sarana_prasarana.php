<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarana_prasarana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Sarana dan Prasarana';
		$this->template->frontend('frontend/profil/sarana_prasarana', $data);
	}
}