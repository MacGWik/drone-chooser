<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proppitch extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('proppitchmodel');
	}

	public function index()
	{
		$this->checkLogin('admin/proppitch/index');
		if($this->session->userdata('class') == 'admin')
		{
			$data['main_content'] = "admin/proppitch/list";
			$this->load->view('templates/default',$data);
		}
		else
		{
			redirect(base_url());
		}
	}

	public function create()
	{
		$this->checkLogin('admin/proppitch/create');
		if($this->session->userdata('class') == 'admin')
		{

			$post = $this->PopulatePost();
			if(isset($post['submit'])){
				$this->proppitchmodel->Insert($post);
				redirect('admin/proppitch');
			}
			$data['main_content'] = "admin/proppitch/create";
			$this->load->view('templates/default',$data);
		}
		else
		{
			redirect(base_url());
		}
	}

	public function edit($id){
		$this->checkLogin('admin/proppitch/edit/'.$id);
		if($this->session->userdata('class') == 'admin')
		{
			$data['dataproppitch'] = $this->proppitchmodel->GetDataByID($id);
			
			$post = $this->PopulatePost();
			if(isset($post['submit'])){
				$post['id'] = $id;
				$this->proppitchmodel->Update($post);
				redirect('admin/proppitch');
			}
			$data['main_content'] = "admin/proppitch/edit";
			$this->load->view('templates/default',$data);
		}
		else
		{
			redirect(base_url());
		}
	}

	function delete(){
		$post = $this->PopulatePost();
		$this->proppitchmodel->delete($post['id']);
		echo json_encode(array("status"=>"success"));
	}

	public function bulkinsert(){
		for ($i=1; $i <= 24; $i++) { 
			$post['nama'] = "Meja";
			$post['grup_id'] = "A";
			$post['tipe_id'] = "MJA";
			$post['qty'] = "1";
			$post['keterangan'] = "-";
			$post['lokasi'] = "IT";
			$post['status_penggunaan'] = "1";

			$latest_id = $this->barangmodel->GetLatestDataByTipe($post['tipe_id']);
			// print_r($latest_id);die();
			if(isset($latest_id->barang_id)){
				$new_id = substr($latest_id->barang_id,-4) + 1;
			}else{
				$new_id = 1;
			}

			if($new_id < 10 ){
				$new_id = "000".$new_id;
			}elseif($new_id < 100 ){
				$new_id = "00".$new_id;
			}elseif($new_id < 1000 ){
				$new_id = "0".$new_id;
			}elseif($new_id < 10000 ){
				$new_id = $new_id;
			}

			$post['barang_id'] = $post['grup_id'].'/'.date('Y').'/'.$post['tipe_id'].'/'.$new_id;
			$this->barangmodel->Insert($post);
		}
			redirect('admin/proppitch');
	}
}