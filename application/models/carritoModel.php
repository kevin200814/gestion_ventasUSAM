<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class carritoModel extends CI_Model
{
	


   //Trae registros de los tipos de pago
	public function get_tipoPago(){

		$tipoPago = $this->db->get('TBL_TIPO_PAGO');
		return $tipoPago->Result();
	}

	public function getUbicacion(){
		$this->db->select('B.ID_MUNICIPIO,B.NOMBRE_MUNICIPIO, A.NOMBRE_DEPARTAMENTO, A.ID_DEPARTAMENTO');
		$this->db->from('TBL_DEPARTAMENTO A');
		$this->db->join('TBL_MUNICIPIO B','A.ID_MUNICIPIO  = B.ID_MUNICIPIO','INNER');
		$this->db->where('A.ID_DEPARTAMENTO = A.ID_DEPARTAMENTO');
		
		$tipoPago = $this->db->get();
		return $tipoPago->Result();
	}

	//Agregando Compra
	public function insertProducto($data){
		return($this->db->insert('TBL_PAGO',$data)) ? true:false; 
	}

	//Registrando detalle de factura
	public function insertDetalle($dataD){
		return($this->db->insert('DETALLE_FACTURA',$dataD)) ? true:false; 
	}
	
} 

