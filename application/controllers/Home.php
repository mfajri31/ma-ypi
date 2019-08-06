<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Header_m');
		$this->load->model('Sambutan_m');
		$this->load->model('Galeri_m');
		$this->load->model('Berita_m');
	}

	public function index()
	{
		$data['header']   = $this->Header_m->tampil()->result_array();
		$data['sambutan'] = $this->Sambutan_m->tampil()->row_array();
		$data['galeri']   = $this->Galeri_m->tampil(null, 8)->result_array();
		$data['berita']   = $this->Berita_m->tampil()->result_array();
		$this->template->frontend('frontend/home', $data);
	}

	public function sambutan()
	{
		$data['title']    = 'Sambutan';
		$data['sambutan'] = $this->Sambutan_m->tampil()->row_array();
		$this->template->frontend('frontend/sambutan', $data);
	}
}
