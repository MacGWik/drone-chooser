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
		$this->load->model('motormodel');
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
			redirect(base_url());
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
		$fc = $this->choose_fc($post['fc_software_id'], $frame->fc_mount_option_id, $frame->name);
		$vtx = $this->choose_vtx($post['purpouse']);
		$fpv_cam = $this->choose_fpv_cam($frame->cam_size_id, $frame->name);
		$motor = $this->choose_motor($post['motor_kv_variant'], $frame->motor_size_id, $frame->prop_size_id, $post['battery_size_id'], $post['purpouse']);
		$prop = $this->choose_prop($frame->prop_size_id, $post['prop_pitch_id'], $frame->name, $post['purpouse']);

	}

	function choose_frame($purpouse, $batterymount, $frame_type_id)
	{
		$data = array();
		$result = array();

		$data['purpouse'] = $purpouse;
		$data['battery_mount'] = $batterymount;
		$data['frame_type_id'] = $frame_type_id;

		$purpouse_text = $this->framemodel->staticVar('purpouse');
		$batterymount_id_text = $this->framemodel->staticVar('batterymount_id');
		$frame_type = $this->frametypemodel->GetDataByID($frame_type_id);

		$result['frame'] = $this->framemodel->GetDataByCondition($data);
		
		$result['reason'] = "Frame ".$result['frame']->name." ditujukan untuk ".$purpouse_text[$purpouse]." dengan tipe frame ".$frame_type->name." dan posisi baterai di ".$batterymount_id_text[$batterymount];

		if($result['frame'] == 0){
			$data['frame_type_id'] = "";
			$result['frame'] = $this->framemodel->GetDataByCondition($data);
			$result['reason'] = "Frame ".$result['frame']->name." ditujukan untuk ".$purpouse_text[$purpouse]." dengan posisi baterai di ".$batterymount_id_text[$batterymount]." namun bukan tipe frame ".$frame_type->name;

			if($result['frame'] == 0){
				$data['battery_mount'] = "";
				$data['frame_type_id'] = $frame_type_id;
				$result['frame'] = $this->framemodel->GetDataByCondition($data);
				$result['reason'] = "Frame ".$result['frame']->name." ditujukan untuk ".$purpouse_text[$purpouse]." dengan tipe frame ".$frame_type->name." namun tidak memiliki posisi baterai di ".$batterymount_id_text[$batterymount];
				
				if($result['frame'] == 0){
					$data['battery_mount'] = "";
					$data['frame_type_id'] = "";
					$result['frame'] = $this->framemodel->GetDataByCondition($data);
					$result['reason'] = "Frame ".$result['frame']->name." ditujukan untuk ".$purpouse_text[$purpouse]." namun bukan tipe frame ".$frame_type->name." dan tidak memiliki posisi baterai di ".$batterymount_id_text[$batterymount];
				}
			}
		}
		return $result;
	}		

	function choose_fc($fc_software_id, $fc_mount_option_id, $frame_name)
	{
		$data = array();
		$result = array();

		$data['fc_software_id'] = $fc_software_id;
		$data['fc_mount_option_id'] = $fc_mount_option_id;

		$result['fc'] = $this->fcmodel->GetDataByCondition($data);

		$fc_software = $this->fc_software->GetDataByID($fc_software_id);

		if($result['fc'] == 0){
			$result['reason'] = "Sistem tidak dapat menemukan FC dengan Software ".$fc_software->name." dan kompatibilitas dengan frame ".$frame_name;
		}else{
			$result['reason'] = "Sistem memilih FC ".$result['fc']->name." karena memiliki Software ".$fc_software->name." dan kompatibel dengan frame ".$frame_name;
		}

		return $result;
	}

	function choose_vtx($purpouse)
	{
		$data = array();
		$result = array();

		$purpouse_text = $this->framemodel->staticVar('purpouse');

		if($purpouse == 1){ //racing
			$data['power_output'] = "25";
		}else if($purpouse == 2){ // freestyle
			$data['power_output'] = "> 25";
		}


		$result['vtx'] = $this->vtxmodel->GetDataByCondition($data);

		if($result['vtx'] == 0){
			$result['reason'] = "Sistem tidak dapat menemukan VTX untuk tujuan ".$purpouse_text[$purpouse];
		}else{
			$result['reason'] = "Sistem memilih VTX ".$result['vtx']->name." karena memiliki power output ".$result['vtx']->power_output."mW yang umum digunakan untuk ".$purpouse_text[$purpouse];
		}

		return $result;
	}

	function choose_fpv_cam($cam_size_id, frame_name)
	{
		$data = array();
		$result = array();

		$data['cam_size_id'] = $cam_size_id;

		$result['fpv_cam'] = $this->fpvcammodel->GetDataByCondition($data);

		if($result['fpv_cam'] == 0){
			$result['reason'] = "Sistem tidak dapat menemukan FPV Camera yang dapat dipasangkan pada frame ".$frame_name;
		}else{
			$result['reason'] = "Sistem memilih FPV Camera ".$result['fpv_cam']->name." karena kompatibel dengan frame ".$frame_name;
		}

		return $result;
	}

	function choose_motor($motor_kv_variant, $motor_size_id, $prop_size_id, $battery_size_id, $purpouse)
	{
		$data = array();
		$result = array();

		if($motor_kv_variant == 1){ //low kv
			$data['target_RPM'] = "< 41000";
		}else if($motor_kv_variant == 2){ // high kv
			$data['target_RPM'] = "> 41000";
		}

		if($purpouse == 1){ //racing
			$data['ordering'] = "DESC";
		}else if($purpouse == 2){ // freestyle
			$data['ordering'] = "ASC";
		}

		$data['limit'] = "0,5";
		$data['battery_size_id'] = $battery_size_id;
		$data['motor_size_id'] = $motor_size_id;
		$data['prop_size_id'] = $prop_size_id;

		$motor_kv_variant_text = $this->motorkvmodel->staticVar('variant_id');
		$battery_size = $this->batterysizemodel->GetDataByID($battery_size_id);

		$result['motor'] = $ths->motormodel->GetDataByCondition($data);
		$result['reason'] = "Sistem memilih motor ".$result['motor']->name." karena memiliki ".$motor_kv_variant_text[$motor_kv_variant]." pada saat menggunakan baterai ".$battery_size->name."S";

		if($result['motor'] == 0){
			if($motor_kv_variant == 1){ //low kv jadi high karena gak ketemu
				$data['target_RPM'] = "> 41000";
				$motor_kv_variant_system_selected = $motor_kv_variant_text[2];
			}else if($motor_kv_variant == 2){ // high kv jadi low karena gak ketmeu
				$data['target_RPM'] = "< 41000";
				$motor_kv_variant_system_selected = $motor_kv_variant_text[1];
			}

			$result['motor'] = $ths->motormodel->GetDataByCondition($data);
			$result['reason'] = "Karena tidak menemukan motor ber-".$motor_kv_variant_text[$motor_kv_variant]." pada saat menggunakan baterai ".$battery_size->name."S, jadi Sistem memilih motor ".$result['motor']->name." dengan ".$motor_kv_variant_system_selected;
		}

		return $result
	}

	function choose_prop($prop_size_id, $prop_pitch_id, $frame_name, $purpouse)
	{
		$data = array();
		$result = array();

		$data['prop_size_id'] = $prop_size_id;
		$data['prop_pitch_id'] = $prop_pitch_id;

		$prop_pitch = $this->proppitchmodel->GetDataByID($prop_pitch_id);
	
		$result['prop'] = $this->propmodel->GetDataByCondition($data);
		$result['reason'] = "Sistem berhasil menemukan prop dengan pitch ".$prop_pitch->name." dan dapat digunakan pada frame ".$frame_name;

		if($result['prop'] == 0){
			if($purpouse == 1){ //racing
				$search = "> ".$prop_pitch->name;
				$data['prop_pitch_id'] = $this->proppitchmodel->GetDataNear($search,"ASC");
			}elseif($purpouse == 2){ //freestyle
				$search = "< ".$prop_pitch->name;
				$data['prop_pitch_id'] = $this->proppitchmodel->GetDataNear($search,"DESC");
			}

			$result['prop'] = $this->propmodel->GetDataByCondition($data);
			

			if($result['prop'] == 0){
				if($purpouse == 1){ //racing
					$search = "< ".$prop_pitch->name;
					$data['prop_pitch_id'] = $this->proppitchmodel->GetDataNear($search,"ASC");
				}elseif($purpouse == 2){ //freestyle
					$search = "> ".$prop_pitch->name;
					$data['prop_pitch_id'] = $this->proppitchmodel->GetDataNear($search,"DESC");
				}

				$result['prop'] = $this->propmodel->GetDataByCondition($data);
			}

			$result['reason'] = "Sistem yang dapat digunakan pada frame ".$frame_name." namun dengan pitch yang berbeda dari yang diinginkan";
		}

		return $result;
	}

	function choose_esc($motor_id, $prop_pitch_id, $prop_size_id, $fc_id)
	{

	}
}