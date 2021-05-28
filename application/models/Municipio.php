<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipio extends CI_Model {
	
	// funcion obtiene todos los registros de la base de datos
	public function get_municipios()
	{
		$query = $this->db->get('TBL_MUNICIPIO');
		return $query->result();
	}

	// funcion inserta un nuevo registro a la base de datos
	public function set_municipio($datos)
	{
		$query = $this->db->insert("TBL_MUNICIPIO", $datos);
		return $query;
	}

	// funcion obtiene solo 1 registro de la base de datos seleccionado por un Identificador
	public function get_one_municipio($id)
	{
		$this->db->where('ID_MUNICIPIO',$id);
		$query = $this->db->get('TBL_MUNICIPIO');
		return $query->row();
	}

	// funcion modifica o actualiza solo 1 registro de la base de datos seleccionado por un Identificador
	public function update_municipio($id,$datos)
	{
		$this->db->where('ID_MUNICIPIO',$id);
		if($this->db->update('TBL_MUNICIPIO',$datos))
			return true;
		else
			return false;
	}

	// funcion elimina solo 1 registro de la base de datos seleccionado por un Identificador
	public function delete_municipio($id)
	{
		$this->db->where('ID_MUNICIPIO',$id);
		if($this->db->delete('TBL_MUNICIPIO'))
			return true;
		else
			return false;
	}
}