<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('motormodel');
		$this->load->model('motorsizemodel');
		$this->load->model('motorkvmodel');
		$this->load->model('propsizemodel');
		$this->load->model('batterysizemodel');
	}

	public function index()
	{
		$this->checkLogin('admin/motor/index');
		if($this->session->userdata('class') == 'admin')
		{
			$data['main_content'] = "admin/motor/list";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	public function create()
	{
		$this->checkLogin('admin/motor/create');
		if($this->session->userdata('class') == 'admin')
		{

			$post = $this->PopulatePost();
			if(isset($post['submit'])){
				$this->motormodel->Insert($post);
				redirect('admin/motor');
			}
			$data['datamotorsize'] = $this->motorsizemodel->GetAllData();
			$data['datapropsize'] = $this->propsizemodel->GetAllData();
			$data['datamotorkv'] = $this->motorkvmodel->GetAllData();
			$data['databatterysize'] = $this->batterysizemodel->GetAllData();
			$data['main_content'] = "admin/motor/create";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	public function edit($id){
		$this->checkLogin('admin/motor/edit/'.$id);
		if($this->session->userdata('class') == 'admin')
		{
			$data['datamotor'] = $this->motormodel->GetDataByID($id);
			
			$post = $this->PopulatePost();
			if(isset($post['submit'])){
				$post['id'] = $id;
				$this->motormodel->Update($post);
				redirect('admin/motor');
			}
			$data['datamotorsize'] = $this->motorsizemodel->GetAllData();
			$data['datapropsize'] = $this->propsizemodel->GetAllData();
			$data['datamotorkv'] = $this->motorkvmodel->GetAllData();
			$data['databatterysize'] = $this->batterysizemodel->GetAllData();
			$data['main_content'] = "admin/motor/edit";
			$this->load->view('templates/default',$data);
		}
		else
		{
			echo "MAU NGAPAIN BROH ?";
		}
	}

	function delete(){
		$post = $this->PopulatePost();
		$this->motormodel->delete($post['id']);
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
			redirect('admin/motor');
	}
}