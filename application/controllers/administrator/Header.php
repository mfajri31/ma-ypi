<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->library('form_validation');
		$this->load->model('Header_m');
	}

	public function index()
	{	
		$data['title']  = 'Header';
		$data['header'] = $this->Header_m->tampil()->result_array();
		$this->template->backend('backend/beranda/header/index', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('id', 'Id', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title']  = 'Edit Header';
			$data['header'] = $this->Header_m->tampil($id)->row_array();
			$this->template->backend('backend/beranda/header/edit', $data);
		} else {
			$slide = $_FILES['slide']['name'];

			if( $slide ){
				$slide     = $this->_do_upload();
				$header = $this->Header_m->tampil($id)->row_array();
				$old_slide = $header['slide'];

				unlink('assets/img/header/'.$old_slide);

				$this->db->set('slide', $slide);
			}

         	$this->db->set('id', $id);
         	$this->db->where('id', $id);
         	$this->db->update('tb_header');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Header telah diedit!</div>');         	

	      	redirect('administrator/header');
		}
	}

	private function _do_upload()
    {
		$config['upload_path']   = './assets/img/header/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = 8000;
		$config['quality']       = '50%';
		$config['encrypt_name']  = true;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('slide') ){
            $error = ['error' => $this->upload->display_errors()];
            print_r($error);
        } else {
            return $this->upload->data('file_name');
        }
    }
}
