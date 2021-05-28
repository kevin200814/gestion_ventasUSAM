<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	//CONSTRUCTOR QUE CARGA EL MODELO
		function __construct()
	{
		parent::__construct();
		$this->load->model('usuarioModel');

	}
	//FUNCION PRINCIPAL PARA MOSTRAR DATOS DE LA BASE DE DATOS
	public function index()
	{
	if($this->session->userdata('NICK') != ''){
		$data = array(
				'page_title'  => 'Usuarios',
				'view'        => 'Usuarios/Usuarios',
				'data_view'   => array()
			);

		$data['us'] = $this->usuarioModel->MostrarUser();
		$this->load->view('template/main_view',$data);

	}else{

			redirect(base_url(). 'Store/index');
	}
		
		
	}
	//MUESTRA LA VISTA PARA AGREGAR REGISTROS
	public function ViewUser (){

		$data = array(
				'page_title'  => 'Usuarios',
				'view'        => 'Usuarios/AddUser',
				'data_view'   => array()
			);

		//SELECT 
		$data['sex'] = $this->usuarioModel->selectSex();
		$data['rol'] = $this->usuarioModel->selectRol();
		$this->load->view('template/main_view',$data);
	}
	//INSERTAR DATOS EN LA BD
	public function InsertUser(){

		$data = array(
			
			'NOMBRES'=> $this->input->post('NOMBRES'),
			'APELLIDOS'=> $this->input->post('APELLIDOS'),
			'EDAD'=> $this->input->post('EDAD'),
			'ID_SEXO'=> $this->input->post('ID_SEXO'),
			'EMAIL'=> $this->input->post('EMAIL'),
			'NICK'=> $this->input->post('NICK'),
			'CONTRASENA'=> $this->input->post('CONTRASENA'),
			'TIPO_USUARIO'=> $this->input->post('TIPO_USUARIO'),
			'ID_ROL'=> $this->input->post('ID_ROL')
		);

		$this->usuarioModel->AgregarUsr($data);
		$this->index();
		}

		//ELIMINAR 
		public function EliminarUs($ID_USUARIO){

			$this->usuarioModel->DeleteUser($ID_USUARIO);
			$this->index();
		}

		//MUESTRA LA VISTA PARA ACTUALIZAR Y TRAE LOS DATOS ANTERIORES
		public function viewEdit($ID_USUARIO){
		$data = array(
				'page_title'  => 'Usuarios',
				'view'        => 'Usuarios/EditUser',
				'data_view'   => array()
			);
		$data['us']= $this->usuarioModel->TraerUsr($ID_USUARIO);	
		$this->load->view('template/main_view',$data);		
		}

		//INSERTA LOS DATOS ACTUALIZADOS
		public function ActualizarUs(){
		$us['ID_USUARIO'] = $_POST['ID_USUARIO'];
		$us['NOMBRES'] = $_POST['NOMBRES'];
		$us['APELLIDOS'] = $_POST['APELLIDOS'];
		$us['EDAD'] = $_POST['EDAD'];
		$us['ID_SEXO'] = $_POST['ID_SEXO'];
		$us['EMAIL'] = $_POST['EMAIL'];
		$us['NICK'] = $_POST['NICK'];
		$us['CONTRASENA'] = $_POST['CONTRASENA'];
		$us['TIPO_USUARIO'] = $_POST['TIPO_USUARIO'];
		$us['ID_ROL'] = $_POST['ID_ROL'];
	
		$this->usuarioModel->EditUser($us);
		$this->index();
		}
}