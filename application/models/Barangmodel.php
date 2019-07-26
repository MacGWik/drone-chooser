<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class BarangModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function GetAllData(){
		$this->db->where('status !=',"9");

		$data = $this->db->get("tb_barang")->result_array();

		return $data;
	}

	function GetLatestDataByTipe($tipe_id){
		$this->db->where('tipe_id',$tipe_id);
		$this->db->order_by("barang_id",'desc');

		$data = $this->db->get("tb_barang")->row();

		return $data;
	}

	function GetDataByStatusPenggunaan($tipe_id,$status_penggunaan){
		$this->db->select('SUM(qty) as qty_sum');
		$this->db->where('tipe_id',$tipe_id);
		$this->db->where('status_penggunaan',$status_penggunaan);

		$data = $this->db->get("tb_barang")->row();

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
	// "tb_barang" = ;
	function GetDataByID($barang_id){
		$this->db->where('barang_id',$barang_id);
		$this->db->where('status !=',"9");

		$data = $this->db->get("tb_barang")->row();

		return $data;
	}

	function Insert($data){
		$this->db->set('barang_id',$data['barang_id']);
		$this->db->set('nama',$data['nama']);
		$this->db->set('qty',$data['qty']);
		$this->db->set('grup_id',$data['grup_id']);
		$this->db->set('tipe_id',$data['tipe_id']);
		$this->db->set('status_penggunaan',$data['status_penggunaan']);
		$this->db->set('lokasi',$data['lokasi']);
		$this->db->set('keterangan',str_replace("\r\n", "<br\>", $data['keterangan']));
		$this->db->set('create_date',date('Y-m-d H:i:s'));
		$this->db->insert("tb_barang");

		$id = $this->db->insert_id();
		return $id;
	}

	function UpdateGambar($data){
		$this->db->set('gambar',$data['gambar']);
		$this->db->where('barang_id',$data['barang_id']);

		$this->db->update("tb_barang");

		return ($this->db->affected_rows() != 1) ? false : true;
	}

	function Update($data){
		$this->db->set('nama',$data['nama']);
		$this->db->set('qty',$data['qty']);
		$this->db->set('grup_id',$data['grup_id']);
		$this->db->set('tipe_id',$data['tipe_id']);
		$this->db->set('status_penggunaan',$data['status_penggunaan']);
		$this->db->set('lokasi',$data['lokasi']);
		$this->db->set('keterangan',str_replace("\r\n", "<br\>", $data['keterangan']));

		$this->db->where('barang_id',$data['barang_id']);

		$this->db->update("tb_barang");
	}

	function Delete($id){
		// $this->db->set('status',"9");
		$this->db->where('barang_id',$id);

		// $this->db->update("tb_barang");
		$this->db->delete("tb_barang");
	}
}