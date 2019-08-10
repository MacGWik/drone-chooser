<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class MotorModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("motors")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("motors")->row();

		return $data;
	}

	function GetDataByCondition($data){
		// $target_RPM = > 41000 for High KV
		// $target_RPM = < 41000 for Low KV
		// SELECT * from (
			// SELECT a.*, b.name * c.name * 4.20 as RPM FROM `motors` a
			// LEFT JOIN motor_kvs b ON a.motor_kv_id = b.id
			// LEFT JOIN battery_sizes c ON a.battery_size_id = c.id
			// WHERE a.`battery_size_id` = $battery_size_id 
		// ) as d
		// WHERE d.RPM $target_RPM AND d.motor_size_id = $motor_size_id AND d.prop_size_id = $prop_size_id

		$sql = "SELECT * from (
					SELECT * from (
						SELECT a.*, b.name * c.name * 4.20 as RPM FROM `motors` a
						LEFT JOIN motor_kvs b ON a.motor_kv_id = b.id
						LEFT JOIN battery_sizes c ON a.battery_size_id = c.id
						WHERE a.`battery_size_id` = ".$data['battery_size_id']." 
					) as d
					WHERE d.deleted_at IS NULL 
					AND d.RPM ".$data['target_RPM'].
					" AND d.motor_size_id = ".$data['motor_size_id'].
					" AND d.prop_size_id = ".$data['prop_size_id'].
					" ORDER BY d.RPM ".$data['ordering'].
					" LIMIT ".$data['limit'].
				") as e ORDER BY RAND()";

		$data = $this->db->query($sql)->row();

		// print_r($sql);die();

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
	// "motors" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("motors")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('name',$data['name']);
		$this->db->set('motor_size_id',$data['motor_size_id']);
		$this->db->set('motor_kv_id',$data['motor_kv_id']);
		$this->db->set('prop_size_id',$data['prop_size_id']);
		$this->db->set('battery_size_id',$data['battery_size_id']);
		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("motors");

		$id = $this->db->insert_id();
		return $id;
	}

	function Update($data){
		$this->db->set('name',$data['name']);
		$this->db->set('motor_size_id',$data['motor_size_id']);
		$this->db->set('motor_kv_id',$data['motor_kv_id']);
		$this->db->set('prop_size_id',$data['prop_size_id']);
		$this->db->set('battery_size_id',$data['battery_size_id']);
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$data['id']);

		$this->db->update("motors");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("motors");
	}
}