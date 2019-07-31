<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->checkLoginUser('user/dashboard/index');
		if($this->session->userdata('class') == 'user')
		{
			$data['main_content'] = "user/dashboard/index";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}

		
	}
}