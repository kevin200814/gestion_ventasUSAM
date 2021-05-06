<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	function logeo($username,$password)
	{
		$this->db->where('NICK', $username);
		$this->db->where('CONTRASENA', $password);
		$query = $this->db->get('TBL_USUARIO');

		if ($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function verificarRol($username)
	{
		$this->db->where('NICK', $username);
		$query = $this->db->get("TBL_USUARIO");

		return $query;

	}

	function CrearUsuario($usuario)
	{
		$this->db->insert("TBL_USUARIO", $usuario);

	}

}
