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

	public function lupa_password()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');

		$this->form_validation->set_message('valid_email', 'Format %s salah');

		$this->form_validation->set_error_delimiters('<small class="text-red">','</small>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Lupa Password';
			$this->load->view('auth/lupa_password', $data);
		} else {
			$email = $this->input->post('email');
			$user  = $this->db->get_where('tb_user', ['email'=>$email, 'status'=>1])->row_array();

			if( $user ){
				$token = angka_random();

				$this->Token_m->tambah($email, $token);
				$this->_sendEmail($token);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Silahkan cek pesan pada email anda.</div>');
				$data['title'] = 'Lupa Password';
				$this->load->view('auth/lupa_password', $data);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Email tidak terdaftar atau belum diverifikasi.</div>');
				$data['title'] = 'Lupa Password';
				$this->load->view('auth/lupa_password', $data);
			}
		}
	}

	public function reset_password()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user       = $this->User_m->tampil(null, $email)->row_array();
		$user_token = $this->Token_m->tampil($token)->row_array();

		if( $user ){
			if( $user_token ){
				if( time() - $user_token['date_created'] < (60*60*24) ){
					$this->session->set_userdata('reset_password', $email);
					$this->ganti_password();
				} else {
					$this->Token_m->hapus($token);

					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Reset password gagal. token kadaluarsa!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Reset password gagal. token salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Reset password gagal. email salah!</div>');
			redirect('auth');
		}
	}

	public function ganti_password()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('min_length', '%s minimal 8 karakter');
		$this->form_validation->set_message('matches', '%s tidak sesuai dengan password');

		$this->form_validation->set_error_delimiters('<small class="text-red">','</small>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Ganti Password';
			$this->load->view('auth/ganti_password', $data);
		} else {
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$email    = $this->session->userdata('reset_password');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$this->Token_m->hapus($token);

			$this->session->unset_userdata('reset_password');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Password telah diganti. silahkan login!</div>');
			redirect('auth');
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

		$this->email->subject('Reset Password');
		$this->email->message('Klik link berikut ini untuk mereset password : <a href="' . base_url().'auth/reset_password?email=' . $this->input->post('email') . '&token=' . $token . '">Reset Password</a> <br> Pesan ini hanya valid 24 jam');

		if( !$this->email->send() ) {
			echo $this->email->print_debugger(['headers']);
		}
	}
}
