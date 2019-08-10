<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class PropModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("props")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("props")->row();

		return $data;
	}

	function GetDataByCondition($data){
		$this->db->where('deleted_at',null);
		$this->db->where('prop_pitch_id',$data['prop_pitch_id']);
		$this->db->where('prop_size_id',$data['prop_size_id']);

		$data = $this->db->get("props")->row();

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
	// "props" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("props")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('name',$data['name']);
		$this->db->set('prop_size_id',$data['prop_size_id']);
		$this->db->set('prop_pitch_id',$data['prop_pitch_id']);
		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("props");

		$id = $this->db->insert_id();
		return $id;
	}

	function Update($data){
		$this->db->set('name',$data['name']);
		$this->db->set('prop_size_id',$data['prop_size_id']);
		$this->db->set('prop_pitch_id',$data['prop_pitch_id']);
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$data['id']);

		$this->db->update("props");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("props");
	}
}