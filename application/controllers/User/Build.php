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
		$this->load->model('fcmodel');
		$this->load->model('vtxmodel');
		$this->load->model('propmodel');
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

	function ajaxRequest()
	{
		$post = $this->PopulatePost();
		
		$frame = $this->choose_frame($post['purpouse'], $post['batterymount'], $post['frame_type_id']);
		$fc = $this->choose_fc($post['fc_software_id'], $frame->fc_mount_option_id);
		$vtx = $this->choose_vtx($post['purpouse']);
		$fpv_cam = $this->choose_fpv_cam($frame->cam_size_id);
	}

	function choose_frame($purpouse, $batterymount, $frame_type_id)
	{
		$data = array();
		$result = array();

		$data['purpouse'] = $purpouse;
		$data['battery_mount'] = $batterymount;
		$data['frame_type_id'] = $frame_type_id;
		$result['frame'] = $this->framemodel->GetDataByCondition($data);
		$result['reason'] = "Semua syarat sesuai";

		if($result['frame'] == 0){
			$data['purpouse'] = $purpouse;
			$data['battery_mount'] = $batterymount;
			$result['frame'] = $this->framemodel->GetDataByCondition($data);
			$result['reason'] = "Tujuan frame terpenuhi, posisi baterai pun terpenuhi, namun tipe frame tidak dapat terpenuhi karena data frame tidak ditemukan dengan syarat tersebut";

			if($result['frame'] == 0){
				$data['purpouse'] = $purpouse;
				$data['frame_type_id'] = $frame_type_id;
				$result['frame'] = $this->framemodel->GetDataByCondition($data);
				$result['reason'] = "Tujuan frame terpenuhi, tipe frame pun terpenuhi, namun posisi baterai tidak dapat terpenuhi karena data frame tidak ditemukan dengan syarat tersebut";
				
				if($result['frame'] == 0){
					$data['purpouse'] = $purpouse;
					$result['frame'] = $this->framemodel->GetDataByCondition($data);
					$result['reason'] = "Tujuan frame terpenuhi, namun posisi baterai dan tipe frame tidak dapat terpenuhi karena data frame tidak ditemukan dengan syarat tersebut";
				}
			}
		}
		return $result;
	}		

	function choose_fc($fc_software_id, $fc_mount_option_id)
	{
		$data = array();
		$data['fc_software_id'] = $fc_software_id;
		$data['fc_mount_option_id'] = $fc_mount_option_id;

		$fc = $this->fcmodel->GetDataByCondition($data);

		return $fc;
	}

	function choose_vtx($purpouse)
	{
		$data = array();
		$data['purpouse'] = $purpouse;

		$vtx = $this->vtxmodel->GetDataByCondition($data);

		return $vtx;
	}

	function choose_fpv_cam($cam_size_id)
	{
		$data = array();
		$data['cam_size_id'] = $cam_size_id;

		$fpv_cam = $this->fpvcammodel->GetDataByCondition($data);

		return $fpv_cam;
	}

	function choose_motor($motor_kv_id, $motor_size_id, $prop_size_id)
	{

	}

	function choose_prop($prop_size_id, $prop_pitch_id)
	{

	}

	function choose_esc($motor_id, $prop_id, $fc_id)
	{

	}
}