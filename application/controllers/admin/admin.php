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
		$usuario = "";

		$senha = "";

		$usuario = $_REQUEST['user'];

		$senha = $_REQUEST['password'];


		$this->load->model('admin/Login','la');

		if ($this->la->Autentifica($usuario,$senha)) 
		{
			echo "autenticou";
			
		}
		else
		{
			return false;
		}
	}
}


?>