<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Amperemotormodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("ampere_motors")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("ampere_motors")->row();

		return $data;
	}

	function GetDataByCondition($data){
		$this->db->where('motor_id',$data['motor_id']);
		$this->db->where('prop_pitch_id',$data['prop_pitch_id']);

		$data = $this->db->get("ampere_motors")->row();

		// print_r($this->db->last_query());die();

		if(isset($data->ampere)){
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
	// "ampere_motors" = ;
	function GetDataByMotorID($motor_id){
		$this->db->where('motor_id',$motor_id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("ampere_motors")->result_array();

		return $data;
	}

	function Insert($data){
		$this->db->set('motor_id',$data['motor_id']);
		$this->db->set('prop_pitch_id',$data['prop_pitch_id']);
		$this->db->set('ampere',$data['ampere']);

		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("ampere_motors");

		$id = $this->db->insert_id();
		return $id;
	}

	function Delete($_motor_id){
		$this->db->where('motor_id',$_motor_id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("ampere_motors");
	}
}