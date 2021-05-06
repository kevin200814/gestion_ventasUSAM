<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recovery_Model extends CI_Model {

	public function ConsultarRecuperacion($correo,$usuario)
	{
		$this->db->where('EMAIL',$correo);
		$this->db->where('NICK',$usuario);
		$query = $this->db->get('TBL_USUARIO');
		return $query->row();
	}

	public function ConsultaVerificacion($pregunta,$email,$respuesta)
	{
		$this->db->where('RECOVERY_PREGUNTA',$pregunta);
		$this->db->where('EMAIL',$email);
		$this->db->where('RECOVERY_RESPUESTA',$respuesta);
		$query = $this->db->get('TBL_USUARIO');
		return $query->row();
	}

	public function UpdatePassword($datos,$id)
	{
		$this->db->where('ID_USUARIO',$id);
		if($this->db->update('TBL_USUARIO',$datos))
			return true;
		else
			return false;
	}

}