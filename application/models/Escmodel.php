<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class EscModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("escs")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("escs")->row();

		return $data;
	}

	function GetDataByCondition($data){
		$this->db->order_by('rand()');
		$this->db->where('deleted_at',null);
		$this->db->where('ampere_rating >=',$data['ampere_target_small']);
		$this->db->where('battery_size_name_start <=',$data['battery_size_name']);
		$this->db->where('battery_size_name_end >=',$data['battery_size_name']);
		$this->db->where('esc_software_id',$data['esc_software_id']);
		

		$data = $this->db->get("escs_battery_sizes")->row();

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
	// "escs" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("escs")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('name',$data['name']);
		$this->db->set('ampere_rating',$data['ampere_rating']);
		$this->db->set('esc_software_id',$data['esc_software_id']);
		$this->db->set('start_battery_size_id',$data['start_battery_size_id']);
		$this->db->set('end_battery_size_id',$data['end_battery_size_id']);
		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("escs");

		$id = $this->db->insert_id();
		return $id;
	}

	function Update($data){
		$this->db->set('name',$data['name']);
		$this->db->set('ampere_rating',$data['ampere_rating']);
		$this->db->set('esc_software_id',$data['esc_software_id']);
		$this->db->set('start_battery_size_id',$data['start_battery_size_id']);
		$this->db->set('end_battery_size_id',$data['end_battery_size_id']);
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$data['id']);

		$this->db->update("escs");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("escs");
	}
}