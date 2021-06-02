<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('rolesModel');
		$this->load->model('Login_model');

	}

	public function index()
	{
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{
					$data = array(
						'page_title'  => 'Roles',
						'view'        => 'Roles/Roles',
						'data_view'   => array()
					);

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);

					//MOSTRAR VISTA PRINCIPAL
					$data['r'] = $this->rolesModel->MostrarRol();
					$this->load->view('template/main_view',$data);
										
				}
				else // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					redirect(base_url(). 'Store/index');
				}
			}
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}		
		
	}
	//MOSTRAR VISTA DE AGREGAR
	
	public function rolView (){

		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{

					$data_view =array(
						'page_title' => 'Categorias',
						'view' => 'Roles/AddRoles',
						'data_view' =>  array()
					);

					$usuario = $this->session->userdata('NICK');
					$data_view['info'] = $this->Login_model->verificarRol($usuario);
					$this->load->view('template/main_view',$data_view);
										
				}
				else // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					redirect(base_url(). 'Store/index');
				}
			}
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}

	}
	//INSETAR REGISTROS

	public function insertRol(){

		if($this->session->userdata('NICK') != ''){

			$rol = array(
				'ROL  '=> $this->input->post('ROL'),
			);

			$this->rolesModel->AddRol($rol);
			$this->index();

		}else{

			redirect(base_url(). 'Store/index');
		}

		
	}

		//ELIMINAR REGISTROS 

	public function EliminarRol($ID_ROL){

		$this->rolesModel->DeleteRol($ID_ROL);
		$this->index();
	}

		//MOSTRAR VISTA PARA ACTUALIZAR

	public function getRol($ID_ROL){

		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{

					$data_view =array(
						'page_title' => 'Mantenimiento',
						'view' => 'Roles/EditRoles',
						'data_view' =>  array()

					);

					$usuario = $this->session->userdata('NICK');
					$data_view['info'] = $this->Login_model->verificarRol($usuario);

					$data_view['rol']= $this->rolesModel->ObtenRol($ID_ROL);
					$this->load->view('template/main_view',$data_view);

									
				}
				else // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					redirect(base_url(). 'Store/index');
				}
			}
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
		
	}

	//ACTUALIZAR LOS REGISTROS

	public function ActualizaRol(){

		$rol['ID_ROL'] = $_POST['ID_ROL'];
		$rol['ROL'] = $_POST['ROL'];
		
		$this->rolesModel->UpdateRol($rol);
		$this->index();

	}


}