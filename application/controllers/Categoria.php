<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	//CONSTRUCTOR QUE CARGA EL MODELO
	function __construct()
	{
		parent::__construct();
		$this->load->model('CategoriaModel');
		$this->load->model('Login_model');

	}

	public function Index (){

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
						'view' => 'Categorias/Categorias',
						'data_view' =>  array()
					);

					$usuario = $this->session->userdata('NICK');
					$data_view['info'] = $this->Login_model->verificarRol($usuario);
					//MOSTRAR DATOS DE LA BD
					$data_view['cat'] = $this->CategoriaModel->MostrarCat();
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

	
	public function VistaCat (){

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
						'view' => 'Categorias/AddCategoria',
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

		//INSERTA DATOS EN LA BASE DE DATOS
	public function InsertarCat(){

		$cat = array(
			//'ID_CATEGORIA '=> $this->input->post('id'),
			'NOMBRE_CATEGORIA  '=> $this->input->post('nombre'),
		);

		$this->CategoriaModel->AgregarCat($cat);
		$this->index();
	}
		//ELIMINAR
	public function EliminarCat($ID_CATEGORIA){

		$this->CategoriaModel->Delete($ID_CATEGORIA);
		$this->index();
	}

		//VISTA PARA ACTUALIZAR 
	public function TraerCategoria($ID_CATEGORIA){

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
						'view' => 'Categorias/EditCategoria',
						'data_view' =>  array()

					);
					$usuario = $this->session->userdata('NICK');
					$data_view['info'] = $this->Login_model->verificarRol($usuario);
					$data_view['cate']= $this->CategoriaModel->ObtenerCat($ID_CATEGORIA);
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

	//ACTUALIZA LOS REGISTROS EN LA BD
	public function ActualizarCategoria(){

		$cate['ID_CATEGORIA'] = $_POST['ID_CATEGORIA'];
		$cate['NOMBRE_CATEGORIA'] = $_POST['NOMBRE_CATEGORIA'];
		
		$this->CategoriaModel->ActualizarCat($cate);
		$this->index();

	}

}

?>