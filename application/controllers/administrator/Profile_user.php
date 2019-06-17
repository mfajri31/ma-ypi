<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_m');
		$this->load->model('Token_m');
	}

	public function index()
	{
		$data['title'] = 'Profil User';
		$this->template->backend('backend/profile_user/index', $data);
	}

	public function edit_profile()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Edit Profile';
			$this->template->backend('backend/profile_user/edit_profile', $data);
		} else {
			$nama  = $this->input->post('nama');
			$email = $this->input->post('email');

            $image = $_FILES['foto']['name'];
            if( $image ) {
                $config['upload_path']   = './assets/img/profil/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 8000;
                $config['encrypt_name']  = TRUE;
    
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
    
                if( $this->upload->do_upload('foto') ){
                    $email  = $this->input->post('email');
                    $user      = $this->User_m->tampil(null, $email)->row_array();
                    $old_image = $user['foto'];

                    if( $old_image != 'default.jpg' ){
                        unlink("assets/img/profil/".$old_image);
                        unlink("assets/img/profil/thumbs/".$old_image);
                    }

                    $ft = $this->upload->data();

                    $config['image_library']  = 'gd2';
                    $config['source_image']   = './assets/img/profil/'.$ft['file_name'];
                    $config['create_thumb']   = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']          = 160;
                    $config['quality']        = '100%';
                    $config['new_image']      = './assets/img/profil/thumbs/';
                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    
                    $foto = $ft['file_name'];
                    
                    $this->db->set('foto', $foto);
                }

            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('tb_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Profil berhasil diedit!</div>');

            redirect('administrator/profile_user');
		}
	}

	public function cek_password()
	{
		$this->form_validation->set_rules('password','Password', 'trim|required');
        
        $this->form_validation->set_message('required','%s tidak boleh kosong');

        $this->form_validation->set_error_delimiters('<small class="text-red">', '</small>');

        if( $this->form_validation->run() == FALSE ){
        	$data['title'] = 'Ganti Email';
			$this->template->backend('backend/profile_user/cek_password', $data);
        } else {
        	$password = $this->input->post('password');

        	if( !password_verify($password, userLogin()['password']) ){
        		 $this->session->set_flashdata('pw_salah', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Password salah!</div>');
        		$data['title'] = 'Ganti Email';
				$this->template->backend('backend/profile_user/cek_password', $data);
        	} else {
        		$this->session->set_userdata('cek_password', true);
        		redirect('administrator/profile_user/ganti_email');
        	}
        }
	}

	public function ganti_email()
	{
		if( !$this->session->userdata('cek_password') ){
			redirect('administrator/profile_user/cek_password');
		}

		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email|is_unique[tb_user.email]');
        
        $this->form_validation->set_message('required','%s tidak boleh kosong');
        $this->form_validation->set_message('valid_email','Format %s salah');
        $this->form_validation->set_message('is_unique','%s tersebut telah digunakan');

        $this->form_validation->set_error_delimiters('<small class="text-red">', '</small>');

        if( $this->form_validation->run() == FALSE ){
        	$data['title'] = 'Ganti Email';
			$this->template->backend('backend/profile_user/ganti_email', $data);
        } else {
        	$this->session->unset_userdata('cek_password');
        	echo "oke";
        }

	}

	public function ganti_password()
	{
		$this->form_validation->set_rules('password_lama','Password Lama', 'trim|required');
        $this->form_validation->set_rules('password_baru','Password Baru', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf','Konfirmasi Password', 'trim|required|matches[password_baru]');
        
        $this->form_validation->set_message('required','%s tidak boleh kosong');
        $this->form_validation->set_message('min_length','%s minimal 8 karakter');
        $this->form_validation->set_message('matches','%s tidak sesuai dengan password baru');

        $this->form_validation->set_error_delimiters('<small class="text-red">', '</small>');

        if( $this->form_validation->run() == FALSE ){
			$data['title'] = 'Ganti Password';
			$this->template->backend('backend/profile_user/ganti_password', $data);
        } else {
        	$password_lama = $this->input->post('password_lama');
            $password_baru = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);
            $password_hash =  userLogin()['password'];

            if( !password_verify($password_lama, $password_hash) ){
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						Password lama salah!</div>');
                $data['title'] = 'Ganti Password';
                $this->template->backend('backend/profile_user/ganti_password', $data);
            } else {
                $this->db->set('password', $password_baru);
                $this->db->where('email', userLogin()['email']);
                $this->db->update('tb_user');

                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						Password berhasil diubah!</div>');
                redirect('administrator/profile_user');
            }
        }
	}
}
