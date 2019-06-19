<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		cekLevel();
		$this->load->library('form_validation');
		$this->load->model('User_m');
		$this->load->model('Token_m');
	}

	public function index()
	{
		$data['title'] = 'User';
		$data['users'] = $this->User_m->tampil()->result_array();
		$this->template->backend('backend/user/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('valid_email', 'Format %s tidak sesuai');
		$this->form_validation->set_message('is_unique', '%s tersebut telah digunakan');
		$this->form_validation->set_message('min_length', '%s minimal 8 karakter');
		$this->form_validation->set_message('matches', '%s tidak sesuai dengan password');

		$this->form_validation->set_error_delimiters('<div class="text-red">','</div>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Tambah User';
			$data['users'] = $this->User_m->tampil()->result_array();
			$this->template->backend('backend/user/tambah', $data);
		} else {
			$email = $this->input->post('email');
			$token = angka_random();

			$this->User_m->tambah();
			$this->Token_m->tambah($email, $token);

			$this->_sendEmail($token);

			$this->session->set_flashdata('message', 'User baru berhasil ditambahkan. Silahkan cek pesan pada <font style="color:#26f5ff;">'.$email.'</font> untuk memverifikasi. Jika tidak menemukan pesan, cek pada pesan spam');
			redirect('administrator/user');
		}
	}

	private function _sendEmail($token)
	{
		$this->load->library('email');

		$config              = [];
		$config['protocol']  = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_user'] = 'robotpesan@gmail.com';
		$config['smtp_pass'] = 'terukis123';
		$config['smtp_port'] = 465;
		$config['mailtype']  = 'html';
		$config['charset']   = 'utf-8';
		$config['newline']   = "\r\n";
        $this->email->initialize($config);

        $this->email->from('robotpesan@gmail.com', 'MA-YPI Martapura OKUT');
		$this->email->to($this->input->post('email'));

		$this->email->subject('Verifikasi User');
		$this->email->message('Klik link berikut ini untuk memverifikasi : <a href="' . base_url().'auth/verify?email=' . $this->input->post('email') . '&token=' . $token . '">Aktivasi</a> <br> Pesan ini hanya valid 24 jam');

		if( !$this->email->send() ) {
			echo $this->email->print_debugger(['headers']);
		}
	}

	public function hapus($id)
	{
		$this->User_m->hapus($id);
		redirect('administrator/user');
	}
}
