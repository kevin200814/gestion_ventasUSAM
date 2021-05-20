<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sexo extends CI_Model {
	
	public function get_sexos()
	{
		$query = $this->db->get('TBL_SEXO');
		return $query->result();
	}

	public function set_sexo($sexo)
	{
		$query = $this->db->insert("TBL_SEXO", $sexo);
		return $query;
	}

	public function get_one_sexo($id_sexo)
	{
		$this->db->where('ID_SEXO',$id_sexo);
		$query = $this->db->get('TBL_SEXO');
		return $query->row();
	}

	public function update_sexo($id,$datos)
	{
		$this->db->where('ID_SEXO',$id);
		if($this->db->update('TBL_SEXO',$datos))
			return true;
		else
			return false;
	}

	public function delete_sexo($id_sexo)
	{
		$this->db->where('ID_SEXO',$id_sexo);
		if($this->db->delete('TBL_SEXO'))
			return true;
		else
			return false;
	}
}