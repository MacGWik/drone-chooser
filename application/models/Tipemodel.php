<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Tipemodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GetAllData(){
		$this->db->where('status','0');
		$data = $this->db->get('tb_tipe')->result_array();
		return $data;
	}

	function Insert($data){
		$this->db->set('id',$data['id']);
		$this->db->set('tipe_nama',$data['tipe_nama']);
		$this->db->insert('tb_tipe');
	}

	function Update($data){
		$this->db->where('id',$data['id']);
		$this->db->set('tipe_nama',$data['tipe_nama']);
		$this->db->update('tb_tipe');
	}

	function Delete($id){
		$this->db->set('status',"9");
		$this->db->where('id',$id);

		$this->db->update("tb_tipe");
	}

	function GetDataByID($id){
		$this->db->where('id',$id);
		$data = $this->db->get('tb_tipe')->row();
		return $data;
	}
}