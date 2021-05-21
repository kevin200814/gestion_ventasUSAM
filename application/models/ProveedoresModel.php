<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProveedoresModel extends CI_Model {

	public function MostrarProv (){
		
		$this->db->order_by('ID_PROVEEDOR ');
		$query = $this->db->get('TBL_PROVEEDOR');

		return $query->result();
	}

	public function AddProv($prov)
	{
		if($this->db->insert('TBL_PROVEEDOR',$prov))
			return true;
		else
			return false;

	}

	public function DeleteProv($ID_PROVEEDOR){
		$this->db->where('ID_PROVEEDOR', $ID_PROVEEDOR);
		$this->db->delete('TBL_PROVEEDOR');
	}

	public function ObtenerProv($ID_PROVEEDOR){

		$this->db->select('ID_PROVEEDOR, NOMBRE_PROVEEDOR');
		$this->db->from('TBL_PROVEEDOR');
		$this->db->where('ID_PROVEEDOR=' .$ID_PROVEEDOR);
		$pro = $this->db->get();
		return  $pro->row()  ;
		

	}

	public function Actualizar($prov){


		$this->db->set('NOMBRE_PROVEEDOR',$prov['NOMBRE_PROVEEDOR']);	

		$this->db->where('ID_PROVEEDOR',$prov['ID_PROVEEDOR']);
		$this->db->update('TBL_PROVEEDOR');

		

	}
}

?>