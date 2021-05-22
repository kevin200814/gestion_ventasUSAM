<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model {

		public function MostrarCat (){
		$this->db->order_by('ID_CATEGORIA  ');
		$query = $this->db->get('TBL_CATEGORIA');

		return $query->result();
	}

	public function AgregarCat($cat)
	{
		if($this->db->insert('TBL_CATEGORIA',$cat))
			return true;
		else
			return false;

	}

	public function Delete ($ID_CATEGORIA){

		$this->db->where('ID_CATEGORIA', $ID_CATEGORIA);
		$this->db->delete('TBL_CATEGORIA');
	}
public function ObtenerCat($ID_CATEGORIA){

		$this->db->select('ID_CATEGORIA, NOMBRE_CATEGORIA ');
			$this->db->from('TBL_CATEGORIA');
		$this->db->where('ID_CATEGORIA=' .$ID_CATEGORIA);
		$query = $this->db->get();
		return  $query->row()  ;
	}

	public function ActualizarCat($cate){


	$this->db->set('NOMBRE_CATEGORIA',$cate['NOMBRE_CATEGORIA']);	

	$this->db->where('ID_CATEGORIA',$cate['ID_CATEGORIA']);
	$this->db->update('TBL_CATEGORIA');

	
	}


	}
