<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function sample_template($data = null)
	{
		$this->load->view('template/sample_template_v', $data);
	}

	public function admin_template($data = null)
	{
		$this->load->view('template/admin_template_v', $data);
	}

}

/* End of file template.php */
/* Location: ./application/modules/template/controllers/template.php */