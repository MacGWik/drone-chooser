<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class FrameModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("frames")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("frames")->row();

		return $data;
	}

	function GetDataByCondition($data){
		if(isset($data['frame_type_id'])){
			$this->db->where('frame_type_id', $data['frame_type_id']);
		}

		if(isset($data['battery_mount'])){
			$this->db->where('battery_mount',$data['battery_mount']);
		}
		
		$this->db->where('purpouse',$data['purpouse']);

		if($data['purpouse'] == 1){
			$this->db->order_by('weight','asc'); //get the lightest frame for racing
		}

		$data = $this->db->get("frames")->row();

		// print_r($this->db->last_query());die();

		if(isset($data->name)){
			return $data;
		}else{
			return 0;
		}
	}

	function staticVar($id){
		$staticVar = array(
							'purpouse' => array(
												'1' => 'Racing',
												'2' => 'Freestyle'
												),
							'batterymount' => array(
													'1' => 'Top',
													'2' => 'Bottom'
													),
							'batterymount_id' => array(
														'1' => 'Atas Frame',
														'2' => 'Bawah Frame'
														)
							);
		return $staticVar[$id];
	}
	// "frames" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("frames")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('name',$data['name']);
		$this->db->set('weight',$data['weight']);
		$this->db->set('size',$data['size']);
		$this->db->set('purpouse',$data['purpouse']);
		$this->db->set('battery_mount',$data['battery_mount']);
		$this->db->set('prop_size_id',$data['prop_size_id']);
		$this->db->set('motor_size_id',$data['motor_size_id']);
		$this->db->set('fc_mount_option_id',$data['fc_mount_option_id']);
		$this->db->set('cam_size_id',$data['cam_size_id']);
		$this->db->set('frame_type_id',$data['frame_type_id']);

		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("frames");

		$id = $this->db->insert_id();
		return $id;
	}

	function Update($data){
		$this->db->set('name',$data['name']);
		$this->db->set('weight',$data['weight']);
		$this->db->set('size',$data['size']);
		$this->db->set('purpouse',$data['purpouse']);
		$this->db->set('battery_mount',$data['battery_mount']);
		$this->db->set('prop_size_id',$data['prop_size_id']);
		$this->db->set('motor_size_id',$data['motor_size_id']);
		$this->db->set('fc_mount_option_id',$data['fc_mount_option_id']);
		$this->db->set('cam_size_id',$data['cam_size_id']);
		$this->db->set('frame_type_id',$data['frame_type_id']);
		
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$data['id']);

		$this->db->update("frames");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("frames");
	}
}