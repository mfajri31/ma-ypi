<?php 

class Template {

	public function frontend($view, $param=null)
	{
		$ci = get_instance();

		$ci->load->view('template_frontend/header', $param);
		$ci->load->view($view);
		$ci->load->view('template_frontend/footer');
	}

	public function backend($view, $param=null)
	{
		$ci = get_instance();

		$ci->load->view('template_backend/header', $param);
		$ci->load->view($view);
		$ci->load->view('template_backend/footer');
	}
}