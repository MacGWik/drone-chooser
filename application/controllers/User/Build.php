<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Build extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('framemodel');
		$this->load->model('frametypemodel');
		$this->load->model('batterysizemodel');
		$this->load->model('motorkvmodel');
		$this->load->model('proppitchmodel');
		$this->load->model('fcsoftwaremodel');
	}

	public function index()
	{
		$this->checkLoginUser('user/build/index');
		if($this->session->userdata('class') == 'user')
		{
			$data['main_content'] = "user/build/index";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	public function create()
	{
		$data['purpouse'] = $this->framemodel->staticVar('purpouse');
		$data['batterymount'] = $this->framemodel->staticVar('batterymount_id');
		$data['frametype'] = $this->frametypemodel->GetAllData();
		$data['batterysize'] = $this->batterysizemodel->GetAllData();
		$data['motorkv'] = $this->motorkvmodel->staticVar('variant_id');
		$data['proppitch'] = $this->proppitchmodel->GetAllData();
		$data['fcsoftware'] = $this->fcsoftwaremodel->GetAllData();

		$this->load->view('user/build/create',$data);
	}
}