<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class FrametypeModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("frame_types")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("frame_types")->row();

		return $data;
	}

	function GetDataByStatusPenggunaan($tipe_id,$status_penggunaan){
		$this->db->select('SUM(qty) as qty_sum');
		$this->db->where('tipe_id',$tipe_id);
		$this->db->where('status_penggunaan',$status_penggunaan);

		$data = $this->db->get("frame_types")->row();

		// print_r($this->db->last_query());die();

		if(isset($data->qty_sum)){
			return $data->qty_sum;
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
	// "frame_types" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_at',NULL);

		$data = $this->db->get("frame_types")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('name',$data['name']);
		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("frame_types");

		$id = $this->db->insert_id();
		return $id;
	}

	function Update($data){
		$this->db->set('name',$data['name']);
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$data['id']);

		$this->db->update("frame_types");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("frame_types");
	}
}