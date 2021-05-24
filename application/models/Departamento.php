<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento extends CI_Model {
	
	public function get_departamentos()
	{
		$this->db->join('TBL_MUNICIPIO', 'TBL_MUNICIPIO.ID_MUNICIPIO = TBL_DEPARTAMENTO.ID_MUNICIPIO');
		$query = $this->db->get('TBL_DEPARTAMENTO');
		return $query->result();
	}

	public function set_departamento($datos)
	{
		$query = $this->db->insert("TBL_DEPARTAMENTO", $datos);
		return $query;
	}

	public function get_one_departamento($id)
	{
		$this->db->where('ID_DEPARTAMENTO',$id);
		$query = $this->db->get('TBL_DEPARTAMENTO');
		return $query->row();
	}

	public function update_departamento($id,$datos)
	{
		$this->db->where('ID_DEPARTAMENTO',$id);
		if($this->db->update('TBL_DEPARTAMENTO',$datos))
			return true;
		else
			return false;
	}

	public function delete_departamento($id)
	{
		$this->db->where('ID_DEPARTAMENTO',$id);
		if($this->db->delete('TBL_DEPARTAMENTO'))
			return true;
		else
			return false;
	}
}