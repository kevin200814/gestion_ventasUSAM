<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipio extends CI_Model {
	
	public function get_municipios()
	{
		$query = $this->db->get('TBL_MUNICIPIO');
		return $query->result();
	}

	public function set_municipio($datos)
	{
		$query = $this->db->insert("TBL_MUNICIPIO", $datos);
		return $query;
	}

	public function get_one_municipio($id)
	{
		$this->db->where('ID_MUNICIPIO',$id);
		$query = $this->db->get('TBL_MUNICIPIO');
		return $query->row();
	}

	public function update_municipio($id,$datos)
	{
		$this->db->where('ID_MUNICIPIO',$id);
		if($this->db->update('TBL_MUNICIPIO',$datos))
			return true;
		else
			return false;
	}

	public function delete_municipio($id)
	{
		$this->db->where('ID_MUNICIPIO',$id);
		if($this->db->delete('TBL_MUNICIPIO'))
			return true;
		else
			return false;
	}
}