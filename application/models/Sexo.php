<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sexo extends CI_Model {
	
	// funcion obtiene todos los registros de la base de datos
	public function get_sexos()
	{
		$query = $this->db->get('TBL_SEXO');
		return $query->result();
	}

	// funcion inserta un nuevo registro a la base de datos
	public function set_sexo($sexo)
	{
		$query = $this->db->insert("TBL_SEXO", $sexo);
		return $query;
	}

	// funcion obtiene solo 1 registro de la base de datos seleccionado por un Identificador
	public function get_one_sexo($id_sexo)
	{
		$this->db->where('ID_SEXO',$id_sexo);
		$query = $this->db->get('TBL_SEXO');
		return $query->row();
	}

	// funcion modifica o actualiza solo 1 registro de la base de datos seleccionado por un Identificador
	public function update_sexo($id,$datos)
	{
		$this->db->where('ID_SEXO',$id);
		if($this->db->update('TBL_SEXO',$datos))
			return true;
		else
			return false;
	}

	// funcion elimina solo 1 registro de la base de datos seleccionado por un Identificador
	public function delete_sexo($id_sexo)
	{
		$this->db->where('ID_SEXO',$id_sexo);
		if($this->db->delete('TBL_SEXO'))
			return true;
		else
			return false;
	}
}