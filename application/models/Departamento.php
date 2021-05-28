<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento extends CI_Model {
	
	// funcion obtiene todos los registros de la base de datos
	public function get_departamentos()
	{
		$this->db->join('TBL_MUNICIPIO', 'TBL_MUNICIPIO.ID_MUNICIPIO = TBL_DEPARTAMENTO.ID_MUNICIPIO');
		$query = $this->db->get('TBL_DEPARTAMENTO');
		return $query->result();
	}

	// funcion inserta un nuevo registro a la base de datos
	public function set_departamento($datos)
	{
		$query = $this->db->insert("TBL_DEPARTAMENTO", $datos);
		return $query;
	}

	// funcion obtiene solo 1 registro de la base de datos seleccionado por un Identificador
	public function get_one_departamento($id)
	{
		$this->db->where('ID_DEPARTAMENTO',$id);
		$query = $this->db->get('TBL_DEPARTAMENTO');
		return $query->row();
	}

	// funcion modifica o actualiza solo 1 registro de la base de datos seleccionado por un Identificador
	public function update_departamento($id,$datos)
	{
		$this->db->where('ID_DEPARTAMENTO',$id);
		if($this->db->update('TBL_DEPARTAMENTO',$datos))
			return true;
		else
			return false;
	}

	// funcion elimina solo 1 registro de la base de datos seleccionado por un Identificador
	public function delete_departamento($id)
	{
		$this->db->where('ID_DEPARTAMENTO',$id);
		if($this->db->delete('TBL_DEPARTAMENTO'))
			return true;
		else
			return false;
	}
}