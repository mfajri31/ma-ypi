<?php 

function sidebar()
{
	$ci = get_instance();

	$ci->load->view('template_frontend/sidebar');
}

function active($param)
{
	$ci = get_instance();

	if( $ci->uri->segment(1) == $param ){
		echo "active";
	}
}

function active_menu($param)
{
	$ci = get_instance();

	if( $ci->uri->segment(2) == $param ){
		echo "active";
	}
}

function cekLogin()
{
	$ci = get_instance();

	if( !$ci->session->userdata('email') ){
		redirect('auth');
	}
}

function cekLevel()
{
	$ci = get_instance();

	if( $ci->session->userdata('level') != 'superadmin' ) {
		redirect('administrator');
	}
}

function cekLogout()
{
	$ci = get_instance();

	if( $ci->session->userdata('email') ){
		redirect('administrator');
	}
}

function angka_random()
{
    $alpha_numeric = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alpha_numeric = substr(str_shuffle($alpha_numeric), 0, 32);

    return $alpha_numeric;
}

function userLogin()
{
	$ci = get_instance();

	$ci->load->model('User_m');
	$email = $ci->session->userdata('email');
	$user  = $ci->User_m->tampil(null, $email)->row_array();

	return $user;
}