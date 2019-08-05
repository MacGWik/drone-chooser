<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');		
	}

	public function index()
	{
		if(isset($_GET['return']))
		{
			$data['redirect_to'] = urldecode($_GET['return']);
		}
		else
		{
			$data['redirect_to'] = "admin/dashboard";
		}
		
		$this->load->view('admin/login/index',$data);
	}

	function ajaxRequest()
	{
		$post = $this->PopulatePost();
		
		$salt = $this->adminmodel->GetData($post['email']);

		if($salt == false)
		{
			echo json_encode(array('status'=>'failed','message'=>'Email Tidak Ditemukan atau Akun Anda Non-Aktif !'));			
		}
		else
		{
			$password = md5($post['password']);
			$dataLogin = $this->adminmodel->GetLoginInfo($post['email'],$password);
			
			if($dataLogin == false)
			{
				echo json_encode(array('status'=>'failed','message'=>'Kombinasi Email dan Password Tidak Ditemukan !'));
			}
			else
			{
				$this->session->set_userdata('name',$dataLogin->name);
				$this->session->set_userdata('id',$dataLogin->id);
				$this->session->set_userdata('class','admin');

				echo json_encode(array('status'=>'success','message'=>'Selamat Datang '.$dataLogin->name.' !'));
			}
		}	
	}

	public function logout()
	{
		$this->session->set_userdata('name',"");
		$this->session->set_userdata('id',"");
		$this->session->set_userdata('class',"");
		
		session_destroy();

		redirect('admin/login');
	}
}