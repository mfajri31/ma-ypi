<?php 

function sidebar()
{
	$ci = get_instance();

	$ci->load->model('Berita_m');

	$data['berita'] = $ci->Berita_m->tampil()->result_array();
	$ci->load->view('template_frontend/sidebar', $data);
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

function hari(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}

function tgl($tanggal){
	$bulan = array (
		1 => 'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[0] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[2];
}