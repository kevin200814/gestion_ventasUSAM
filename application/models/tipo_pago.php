<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_pago extends CI_Model {

	public function get_tipo_pago()
	{
		$query = $this->db->get('TBL_TIPO_PAGO');
		return $query->result();
	}

	public function get_one_tipo_pago($id)
	{
		$this->db->where('ID_TIPO_PAGO',$id);
		$query = $this->db->get('TBL_TIPO_PAGO');
		return $query->row();
	}

	public function set_tipo_pago($tpago)
	{
		$query = $this->db->insert("TBL_TIPO_PAGO",$tpago);
		return $query;
	}

	public function update_tipo_pago($id,$datos)
	{
		$this->db->where('ID_TIPO_PAGO',$id);
		if($this->db->update('TBL_TIPO_PAGO',$datos))
			return true;
		else
			return false;
	}

	public function delete_tipo_pago($id)
	{
		$this->db->where('ID_TIPO_PAGO',$id);
		if($this->db->delete('TBL_TIPO_PAGO'))
			return true;
		else
			return false;
	}
}