<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {

	//CONSTRUCTOR QUE CARGA EL MODELO
	function __construct()
	{
		parent::__construct();
		$this->load->model('ProveedoresModel');
	}

	public function Index (){

		$data_view =array(
			'page_title' => 'Proveedores',
			'view' => 'Proveedores/Proveedor',
			'data_view' =>  array()

		);

		//MOSTAR DATOS DE LA BASE DE DATOS
		
		$data_view['prov'] = $this->ProveedoresModel->MostrarProv();

		$this->load->view('template/main_view',$data_view);
	}
	public function Vista(){

		$data_view =array(
			'page_title' => 'Proveedores',
			'view' => 'Proveedores/AddProveedor',
			'data_view' =>  array()

		);
		$this->load->view('template/main_view',$data_view);
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

		$data_view =array(
			'page_title' => 'Proveedores',
			'view' => 'Proveedores/EditProveedor',
			'data_view' =>  array()

		);

		$data_view['prov']= $this->ProveedoresModel->ObtenerProv($ID_PROVEEDOR);
		$this->load->view('template/main_view',$data_view);
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