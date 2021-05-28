<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rolesModel extends CI_Model {

	public function MostrarRol (){
		$this->db->order_by('ID_ROL');
		$query = $this->db->get('TBL_ROL');

		return $query->result();
	}

	public function AddRol($rol)
	{
		if($this->db->insert('TBL_ROL',$rol))
			return true;
		else
			return false;

	}

	public function DeleteRol ($ID_ROL){

		$this->db->where('ID_ROL', $ID_ROL);
		$this->db->delete('TBL_ROL');
	}

	public function ObtenRol($ID_ROL){

		$this->db->select('* ');
		$this->db->from('TBL_ROL');
		$this->db->where('ID_ROL=' .$ID_ROL);
		$query = $this->db->get();
		return  $query->row()  ;
	}

	public function UpdateRol($rol){


		$this->db->set('ROL',$rol['ROL']);	

		$this->db->where('ID_ROL',$rol['ID_ROL']);
		$this->db->update('TBL_ROL');

		
	}


}