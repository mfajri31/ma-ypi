<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Visi_misi_m');
		
		$data['title']     = 'Visi dan Misi';
		$data['visi_misi'] = $this->Visi_misi_m->tampil()->row_array();
		$this->template->frontend('frontend/profil/visi_misi', $data);
	}
}
