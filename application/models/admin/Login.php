<?php


class Login extends CI_Model
{
	function _construct()
	{
		parent::_construct();
	}

	public function Autentifica($usuario = "", $senha = "")
	{

		$this->db->select('nm_usuario','nm_senha','cd_webservice');

		$this->db->from('tb_webservice');

		$this->db->where('nm_usuario',$usuario);
		$this->db->where('nm_senha',$senha);
		$this->db->limit(1);

//		$query = $this->db->query("select count(*) as qt from tb_webservice where nm_usuario = '{$usuario}' and nm_senha = '{$senha}'");

		$query = $this->db->get();

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>