<?php


class Login extends CI_Model
{
	function _construct()
	{
		parent::_construct();
	}

	public function Autentifica($usuario = "", $senha = "")
	{
		$query = $this->db->query("select count(*) as qt from tb_webservice where nm_login = '{$usuario}' and nm_senha = '{$senha}'");

		if($this->query->num_rows() > 0)
		{
			return true;
		}
	}
}

?>