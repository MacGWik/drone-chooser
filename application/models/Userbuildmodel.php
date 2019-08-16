<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Userbuildmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("user_builds")->result_array();

		return $data;
	}

	function GetDataByIDandUserID($data){
		$this->db->where('deleted_at',null);
		$this->db->where('build_id',$data['build_id']);
		$this->db->where('user_id',$data['user_id']);

		$data = $this->db->get("user_builds")->row();

		if(isset($data->id)){
			return 1;
		}else{
			return 0;
		}
	}

	function SearchLovedBuild($data){
		$this->db->select('SUM(qty) as qty_sum');
		$this->db->where('tipe_id',$tipe_id);
		$this->db->where('status_penggunaan',$status_penggunaan);

		$data = $this->db->get("user_builds")->row();

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
	// "user_builds" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);

		$data = $this->db->get("user_builds")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('user_id',$data['user_id']);
		$this->db->set('build_id',$data['build_id']);

		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("user_builds");

		$id = $this->db->insert_id();
		return $id;
	}

	function Delete($data){
		$this->db->where('build_id',$data['build_id']);
		$this->db->where('user_id',$data['user_id']);

		$this->db->delete("user_builds");
	}
}