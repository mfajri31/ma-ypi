<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_m');
		$this->load->model('Token_m');
	}

	public function index()
	{
		cekLogout();

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('valid_email', 'Format %s salah');

		$this->form_validation->set_error_delimiters('<small class="text-red">','</small>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Login';
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email    = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		$user     = $this->User_m->tampil(null, $email)->row_array();

		if( $user ){
			if( $user['status'] == 1 ){
				if( password_verify($password, $user['password']) ){
					$data = [
						'email' => $user['email'],
						'level' => $user['level']
					];

					$this->session->set_userdata($data);

					redirect('administrator');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						Email atau Password salah!</div>');
					$data['title'] = 'Login';
					$this->load->view('auth/login', $data);
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Email belum diverifikasi!</div>');
				$data['title'] = 'Login';
				$this->load->view('auth/login', $data);
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Email tidak terdaftar!</div>');
			$data['title'] = 'Login';
			$this->load->view('auth/login', $data);
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user       = $this->User_m->tampil(null, $email)->row_array();
		$user_token = $this->Token_m->tampil($token)->row_array();

		if( $user ){
			if( $user_token ){
				if( time() - $user_token['date_created'] < (60*60*24) ){
					$this->db->set('status', 1);
					$this->db->where('email', $email);
					$this->db->update('tb_user');

					$this->Token_m->hapus($token);

					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><font style="color:#26f5ff;">
					'. $email .'</font> telah diverifikasi. silahkan login!</div>');
					redirect('auth');
				} else {
					$this->User_m->hapus(null, $email);
					$this->Token_m->hapus($token);

					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Gagal memverifikasi! Token kadaluarsa.</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Gagal memverifikasi! Token salah.</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Gagal memverifikasi atau Email tidak terdaftar!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('level');
		redirect('auth');
	}
}
