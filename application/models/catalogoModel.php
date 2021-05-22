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

	//Listar tabla productos 
	public function getCatalogo (){ 
		$this->db->select('*');
		$this->db->from('TBL_CATALOGO ');
		$this->db->join('TBL_PROVEEDOR ','TBL_CATALOGO.ID_PROVEEDOR  = TBL_PROVEEDOR.ID_PROVEEDOR ','INNER');
		

		$this->db->join('TBL_CATEGORIA ','TBL_CATALOGO.ID_CATEGORIA   =TBL_CATEGORIA.ID_CATEGORIA ','INNER');

		$query = $this->db->get();
		return $query->Result();
	}

	public function selectProv() //Select
	{ 
		$prov = $this->db->get('TBL_PROVEEDOR');
		return $prov->Result(); 
	}

	public function selectCat(){
		$prov = $this->db->get('TBL_CATEGORIA');
		return $prov->Result(); 
	}
	
	public function AddProd($prod)
	{
		$this->db->insert('TBL_CATALOGO',$prod);

		if($this->db->affected_rows() > 0){

			return true;
		}
		else{
			return false;
		}

	}

	public function DeleteProd($ID_PRODUCTO){
		$this->db->where('ID_PRODUCTO', $ID_PRODUCTO);
		$this->db->delete('TBL_CATALOGO');
	}

	public function ObtenerProd($ID_PRODUCTO){

		$this->db->select('ID_PRODUCTO,CODIGO_PRODUCTO,NOMBRE_PRODUCTO,NOMBRE_IMAGEN,MARCA,ESPECIFICACIONES,ID_PROVEEDOR,ID_CATEGORIA,STOCK_INICIAL,ENTRADAS,SALIDAS,CANTIDAD_EXISTENCIA,PRECIO,ESTADO,OFERTA');
		$this->db->from('TBL_CATALOGO');
		$this->db->where('ID_PRODUCTO=' .$ID_PRODUCTO);
		$query = $this->db->get();
		return  $query->row()  ;
	}

	public function ActualizarProd($prod){
		$this->db->set('CODIGO_PRODUCTO',$prod['CODIGO_PRODUCTO']);
		$this->db->set('NOMBRE_PRODUCTO',$prod['NOMBRE_PRODUCTO']);
		$this->db->set('NOMBRE_IMAGEN',$prod['NOMBRE_IMAGEN']);
		$this->db->set('MARCA',$prod['MARCA']);
		$this->db->set('ESPECIFICACIONES',$prod['ESPECIFICACIONES']);
		$this->db->set('ID_PROVEEDOR',$prod['ID_PROVEEDOR']);
		$this->db->set('ID_CATEGORIA',$prod['ID_CATEGORIA']);
		$this->db->set('STOCK_INICIAL',$prod['STOCK_INICIAL']);
		$this->db->set('ENTRADAS',$prod['ENTRADAS']);
		$this->db->set('SALIDAS',$prod['SALIDAS']);
		$this->db->set('CANTIDAD_EXISTENCIA',$prod['CANTIDAD_EXISTENCIA']);
		$this->db->set('PRECIO',$prod['PRECIO']);
		$this->db->set('ESTADO',$prod['ESTADO']);
		$this->db->set('OFERTA',$prod['OFERTA']);

		$this->db->where('ID_PRODUCTO',$prod['ID_PRODUCTO']);
		$this->db->update('TBL_CATALOGO');
	}
} 

