<?php 

function active($param)
{
	$ci = get_instance();

	if( $ci->uri->segment(1) == $param ){
		echo "active";
	}
}