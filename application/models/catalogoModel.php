<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catalogoModel extends CI_Model
{
	
	//todos los productos
	public function getAllProducto($id){
		$this->db->where('ID_PRODUCTO = ', $id);
		$producto= $this->db->get('TBL_CATALOGO');
		return $producto->Result();
	}

	//Smarphone
	public function getProducto(){
		$this->db->where('ID_CATEGORIA = ', 1);
		$phone = $this->db->get('TBL_CATALOGO');
		
		return $phone->Result();
	}

	//Audio
	public function getProAudio(){
		$this->db->where('ID_CATEGORIA = ', 2);
		$audio = $this->db->get('TBL_CATALOGO');
		
		return $audio->Result();
	}

	//Computacion
	public function getProCom(){
		$this->db->where('ID_CATEGORIA = ', 3);
		$com = $this->db->get('TBL_CATALOGO');
		
		return $com->Result();
	}	

	//Almacenamiento
	public function getProAlmacena(){
		$this->db->where('ID_CATEGORIA = ', 4);
		$almacena = $this->db->get('TBL_CATALOGO');
		
		return $almacena->Result();
	}	

	//Video
	public function getProVideo(){
		$this->db->where('ID_CATEGORIA = ', 5);
		$video = $this->db->get('TBL_CATALOGO');
		
		return $video->Result();
	}	
	
} 

