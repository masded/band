<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['content_view'] = 'Dashboard/dashboard1_v';
		$this->template->admin_template($data);
	}
	}