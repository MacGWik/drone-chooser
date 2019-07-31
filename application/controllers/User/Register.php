<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');		
	}

	public function index()
	{		
		$data['redirect_to'] = "user/login";		
		$this->load->view('user/register/index',$data);
	}

	function ajaxRequest()
	{
		$post = $this->PopulatePost();
		
		$salt = $this->usermodel->GetData($post['email']);

		if($salt == false)
		{
			$password = md5($post['password']);
			$this->usermodel->Insert($post,$password);
			
			echo json_encode(array('status'=>'success','message'=>'Selamat, Akun Anda Sudah berhasil dibuat !<br/>Silahkan Coba Login'));			
		}
		else
		{
			echo json_encode(array('status'=>'failed','message'=>'Email Sudah Terdaftar !'));
		}	
	}

	public function logout()
	{
		$this->session->set_userdata('name',"");
		$this->session->set_userdata('id',"");
		$this->session->set_userdata('class',"");
		
		session_destroy();

		redirect('login');
	}
}