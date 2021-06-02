<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {

	//CONSTRUCTOR QUE CARGA EL MODELO
	function __construct()
	{
		parent::__construct();
		$this->load->model('ProveedoresModel');
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
						'page_title' => 'Proveedores',
						'view' => 'Proveedores/Proveedor',
						'data_view' =>  array()

					);

					//MOSTAR DATOS DE LA BASE DE DATOS
					$usuario = $this->session->userdata('NICK');
					$data_view['info'] = $this->Login_model->verificarRol($usuario);
					
					$data_view['prov'] = $this->ProveedoresModel->MostrarProv();
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
	public function Vista(){

		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{
					$data_view =array(
						'page_title' => 'Proveedores',
						'view' => 'Proveedores/AddProveedor',
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

	//INSERTAR DATOS A LA BD
	public function InsertarProv(){

		$prov = array(
			//'ID_PROVEEDOR '=> $this->input->post('id'),
			'NOMBRE_PROVEEDOR '=> $this->input->post('nombre'),
		);

		$this->ProveedoresModel->AddProv($prov);
		$this->index();
	}

	public function EliminarProv ($ID_PROVEEDOR){

		$this->ProveedoresModel->DeleteProv($ID_PROVEEDOR);
		$this->index();
	}


	//CARGAR LA VISTA EDITAR Y TRAER LOS DATOS A ACTUALIZAR
	public function TraerDato($ID_PROVEEDOR){

		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{

					$data_view =array(
						'page_title' => 'Proveedores',
						'view' => 'Proveedores/EditProveedor',
						'data_view' =>  array()

					);

					$usuario = $this->session->userdata('NICK');
					$data_view['info'] = $this->Login_model->verificarRol($usuario);
					$data_view['prov']= $this->ProveedoresModel->ObtenerProv($ID_PROVEEDOR);
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

	//ISERTAR DATOS ACTUALIZADOS 
	public function ActualizarProv (){

		$prov['ID_PROVEEDOR'] = $_POST['ID_PROVEEDOR'];
		$prov['NOMBRE_PROVEEDOR'] = $_POST['NOMBRE_PROVEEDOR'];

		$this->ProveedoresModel->Actualizar($prov);
		$this->index();

	}

}

?>