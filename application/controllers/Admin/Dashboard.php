<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->checkLogin('admin/dashboard/index');
		if($this->session->userdata('class') == 'admin')
		{
			$data['main_content'] = "admin/dashboard/index";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}

		
	}
}