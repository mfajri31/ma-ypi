<?php 

function sidebar()
{
	$ci = get_instance();

	$ci->load->view('template_frontend/sidebar');
}