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