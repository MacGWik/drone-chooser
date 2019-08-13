<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class BuildModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('deleted_at',null);

		$data = $this->db->get("builds")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("builds")->row();

		return $data;
	}

	function GetDataByStatusPenggunaan($tipe_id,$status_penggunaan){
		$this->db->select('SUM(qty) as qty_sum');
		$this->db->where('tipe_id',$tipe_id);
		$this->db->where('status_penggunaan',$status_penggunaan);

		$data = $this->db->get("builds")->row();

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
	// "builds" = ;
	function GetDataByID($id){
		$this->db->where('id',$id);

		$data = $this->db->get("builds")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('frame_id',$data['frame']['frame']->id);
		$this->db->set('motor_id',$data['motor']['motor']->id);
		$this->db->set('prop_id',$data['prop']['prop']->id);
		$this->db->set('fpv_cam_id',$data['fpv_cam']['fpv_cam']->id);
		$this->db->set('fc_id',$data['fc']['fc']->id);
		$this->db->set('esc_id',$data['esc']['esc']->id);
		$this->db->set('vtx_id',$data['vtx']['vtx']->id);

		$this->db->set('battery_size_id',$data['battery_size']);
		$this->db->set('reason',$data['reason']);
		$this->db->set('user_owner_id',$data['user_owner_id']);

		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));
		$this->db->insert("builds");

		$id = $this->db->insert_id();
		return $id;
	}

	function UpdateName($name,$id){
		$this->db->set('name',$name);
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->where('id',$id);

		$this->db->update("builds");
	}

	function Delete($id){
		$this->db->where('id',$id);
		$this->db->set('deleted_at',date('Y-m-d H:i:s'));

		$this->db->update("builds");
	}
}