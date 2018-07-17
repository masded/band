<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['content_view'] = 'home/home_v';
		$this->template->admin_template($data);
	}

	public function about()
	{
		$data['content_view'] = 'home/about_v';
		$this->template->admin_template($data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/modules/dashboard/controllers/dashboard.php */