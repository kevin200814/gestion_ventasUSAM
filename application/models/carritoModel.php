<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class carritoModel extends CI_Model
{
	


	//Smarphone
	public function getProducto(){
		$this->db->where('ID_CATEGORIA = ', 1);
		$phone = $this->db->get('TBL_CATALOGO');
		
		return $phone->Result();
	}

	//Agregando Compra
	public function insertProducto($data){
		return($this->db->insert('TBL_PAGO',$data)) ? true:false; 
	}
	
} 

