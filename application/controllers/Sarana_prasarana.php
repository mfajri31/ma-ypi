<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarana_prasarana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Sarana_m');

		$data['title'] = 'Sarana dan Prasarana';
		$data['sarana'] = $this->Sarana_m->tampil()->row_array();
		$this->template->frontend('frontend/profil/sarana_prasarana', $data);
	}
}