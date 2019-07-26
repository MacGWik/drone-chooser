<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class AdminModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function InsertAdmin($data)
	{
		$this->db->set('name',$data['name']);
		$this->db->set('email',$data['name']);
		$this->db->set('password',$data['password']);
		$this->db->set('created_at',date('Y-m-d H:i:s'));
		$this->db->set('updated_at',date('Y-m-d H:i:s'));

		$this->db->insert('admins');
	}

	function GetData($email)
	{
		$this->db->where('email',$email);
		$this->db->where('deleted_at',null);
		$data = $this->db->get('admins')->row();
		
		if(isset($data->id)){
			return $data->id;
		}else{
			return false;
		}
	}

	function GetLoginInfo($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$data = $this->db->get('admins')->row();
		
		if(isset($data->id)){
			return $data;
		}else{
			return false;
		}
	}

	function UpdateStatus($data)
	{
		$this->db->set('status',$data['status']);
		$this->db->where('admin_id',$data['id']);
		$data = $this->db->update('admins');
		
		return ($this->db->affected_rows() != 1) ? false : true;
	}
}