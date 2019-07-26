<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('tipemodel');
	}

	public function index()
	{
		$this->checkLogin('tipe/index');
		if($this->session->userdata('admin_level') == 1)
		{
			$data['main_content'] = "tipe/list";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	public function create()
	{
		$this->checkLogin('tipe/create');
		if($this->session->userdata('admin_level') == 1)
		{

			$post = $this->PopulatePost();
			if(isset($post['submitTipe'])){
				$this->tipemodel->Insert($post);
				
				redirect('tipe');
			}
			
			$data['main_content'] = "tipe/create";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	public function edit($id){
		$this->checkLogin('tipe/edit/'.$id);
		if($this->session->userdata('admin_level') == 1)
		{
			$data['dataTipe'] = $this->tipemodel->GetDataByID($id);

			$post = $this->PopulatePost();
			if(isset($post['submitTipe'])){
				$this->tipemodel->Update($post);
				
				redirect('tipe');
			}
			$data['main_content'] = "tipe/edit";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	function delete(){
		$post = $this->PopulatePost();
		$this->tipemodel->delete($post['id']);
		echo json_encode(array("status"=>"success"));
	}

	public function exportExcel()
	{
		
	}
}