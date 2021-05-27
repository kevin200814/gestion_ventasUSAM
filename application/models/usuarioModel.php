<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarioModel extends CI_Model {

	public function MostrarUser (){
		$this->db->select('*');
		$this->db->from('TBL_USUARIO u');
		$this->db->join('TBL_ROL r','u.ID_ROL =r.ID_ROL','INNER');
		$this->db->join('TBL_SEXO s','u.ID_SEXO   = s.ID_SEXO','INNER');

		$query = $this->db->get();
		return $query->Result();
	}

	public function selectRol() //Select
	{ 
		$rol = $this->db->get('TBL_ROL');
		return $rol->Result(); 
	}

public function selectSex() //Select
	{ 
		$sex = $this->db->get('TBL_SEXO');
		return $sex->Result(); 
	}

	public function AgregarUsr($data)
	{
		if($this->db->insert('TBL_USUARIO',$data))
			return true;
		else
			return false;

	}

	public function DeleteUser ($ID_USUARIO){

		$this->db->where('ID_USUARIO', $ID_USUARIO);
		$this->db->delete('TBL_USUARIO');
	}

	public function TraerUsr($ID_USUARIO){

		$this->db->select('*');
			$this->db->from('TBL_USUARIO');
		$this->db->where('ID_USUARIO=' .$ID_USUARIO);
		$query = $this->db->get();
		return  $query->row()  ;
	}


	public function EditUser($us){


	$this->db->set('NOMBRES',$us['NOMBRES']);	
	$this->db->set('APELLIDOS',$us['APELLIDOS']);
	$this->db->set('EDAD',$us['EDAD']);
	$this->db->set('ID_SEXO',$us['ID_SEXO']);
	$this->db->set('EMAIL',$us['EMAIL']);
	$this->db->set('NICK',$us['NICK']);
	$this->db->set('CONTRASENA',$us['CONTRASENA']);
	$this->db->set('TIPO_USUARIO',$us['TIPO_USUARIO']);
	$this->db->set('ID_ROL',$us['ID_ROL']);

	$this->db->where('ID_USUARIO',$us['ID_USUARIO']);
	$this->db->update('TBL_USUARIO');
	}
		


}