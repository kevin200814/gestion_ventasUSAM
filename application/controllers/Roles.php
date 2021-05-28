<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('rolesModel');

	}

	public function index()
	{
		if($this->session->userdata('NICK') != ''){

			$data = array(
				'page_title'  => 'Roles',
				'view'        => 'Roles/Roles',
				'data_view'   => array()
			);
		//MOSTRAR VISTA PRINCIPAL
			$data['r'] = $this->rolesModel->MostrarRol();
			$this->load->view('template/main_view',$data);

		}else{

			redirect(base_url(). 'Store/index');
		}
		
		
	}
	//MOSTRAR VISTA DE AGREGAR
	
	public function rolView (){
		$data_view =array(
			'page_title' => 'Categorias',
			'view' => 'Roles/AddRoles',
			'data_view' =>  array()
		);

		$this->load->view('template/main_view',$data_view);
	}
	//INSETAR REGISTROS

	public function insertRol(){

		$rol = array(
			'ROL  '=> $this->input->post('ROL'),
		);

		$this->rolesModel->AddRol($rol);
		$this->index();
	}

		//ELIMINAR REGISTROS 

	public function EliminarRol($ID_ROL){

		$this->rolesModel->DeleteRol($ID_ROL);
		$this->index();
	}

		//MOSTRAR VISTA PARA ACTUALIZAR

	public function getRol($ID_ROL){

		$data_view =array(
			'page_title' => 'Mantenimiento',
			'view' => 'Roles/EditRoles',
			'data_view' =>  array()

		);
		$data_view['rol']= $this->rolesModel->ObtenRol($ID_ROL);
		$this->load->view('template/main_view',$data_view);
	}

	//ACTUALIZAR LOS REGISTROS

	public function ActualizaRol(){

		$rol['ID_ROL'] = $_POST['ID_ROL'];
		$rol['ROL'] = $_POST['ROL'];
		
		$this->rolesModel->UpdateRol($rol);
		$this->index();

	}


}