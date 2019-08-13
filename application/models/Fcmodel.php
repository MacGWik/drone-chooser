<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class FcModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("fcs")->result_array();

		return $data;
	}

	function GetAllFcMountOption($fc_software_id){
		$this->db->select('DISTINCT(fc_mount_option_id)');
		$this->db->where('fc_software_id',$fc_software_id);

		$data = $this->db->get("fcs")->result_array();

		$result = array();
		foreach ($data as $key => $value) {
			array_push($result, $value['fc_mount_option_id']);
		}
		
		return $result;
	}

	function GetDataByCondition($data){
		$this->db->order_by('rand()');
		$this->db->where('deleted_at',null);
		$this->db->where('fc_mount_option_id',$data['fc_mount_option_id']);
		$this->db->where('fc_software_id',$data['fc_software_id']);

		$data = $this->db->get("fcs")->row();

		// print_r($this->db->last_query());die();

		if(isset($data->name)){
			return $data;
		}else{
			return 0;
		}
	}

	function staticVar($id){
		$staticVar = array(
							'status_penggunaan' => array(
													'1' => 'digunakan',
													'2' => 'rusak',
													'3' => 'tersedia'
													)
							);
		return $staticVar[$id];
	}
	// "fcs" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("fcs")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('name',$data['name']);
		$this->db->set('fc_software_id',$data['fc_software_id']);
		$this->db->set('esc_software_id',$data['esc_software_id']);
		$this->db->set('fc_mount_option_id',$data['fc_mount_option_id']);
		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("fcs");

		$id = $this->db->insert_id();
		return $id;
	}

	function Update($data){
		$this->db->set('name',$data['name']);
		$this->db->set('fc_software_id',$data['fc_software_id']);
		$this->db->set('esc_software_id',$data['esc_software_id']);
		$this->db->set('fc_mount_option_id',$data['fc_mount_option_id']);
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$data['id']);

		$this->db->update("fcs");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("fcs");
	}
}