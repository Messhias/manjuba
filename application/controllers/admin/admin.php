<?php

class Admin extends CI_Controller
{
	
	public function index()
	{


		$this->load->view('layout/header');
		$this->load->view('admin/frmlogin');
		$this->load->view('js/login');
		$this->load->view('layout/footer');
	}

	public function login()
	{
		$this->load->model('admin/Login');
		if ($_REQUEST['password'] && $_REQUEST['user']) {
			$usuario = $_REQUEST['user'];
			$pass = $_REQUEST['pass'];
			
			if ($this->Login->Autentifica($usuario,$pass)) {
				return true;
				# code...
			}
			else
			{
				return false;
			}
		}
		else
			return false;
	}
}


?>