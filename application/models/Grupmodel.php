<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Grupmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GetAllData(){
		$data = $this->db->get('tb_grup')->result_array();
		return $data;
	}

	function GetDataByID($id){
		$this->db->where('id',$id);
		$data = $this->db->get('tb_grup')->row();
		return $data;
	}
}