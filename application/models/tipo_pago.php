<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_pago extends CI_Model {

	// funcion obtiene todos los registros de la base de datos
	public function get_tipo_pago()
	{
		$query = $this->db->get('TBL_TIPO_PAGO');
		return $query->result();
	}

	// funcion obtiene solo 1 registro de la base de datos seleccionado por un Identificador
	public function get_one_tipo_pago($id)
	{
		$this->db->where('ID_TIPO_PAGO',$id);
		$query = $this->db->get('TBL_TIPO_PAGO');
		return $query->row();
	}

	// funcion inserta un nuevo registro a la base de datos
	public function set_tipo_pago($tpago)
	{
		$query = $this->db->insert("TBL_TIPO_PAGO",$tpago);
		return $query;
	}

	// funcion modifica o actualiza solo 1 registro de la base de datos seleccionado por un Identificador
	public function update_tipo_pago($id,$datos)
	{
		$this->db->where('ID_TIPO_PAGO',$id);
		if($this->db->update('TBL_TIPO_PAGO',$datos))
			return true;
		else
			return false;
	}

	// funcion elimina solo 1 registro de la base de datos seleccionado por un Identificador
	public function delete_tipo_pago($id)
	{
		$this->db->where('ID_TIPO_PAGO',$id);
		if($this->db->delete('TBL_TIPO_PAGO'))
			return true;
		else
			return false;
	}
}