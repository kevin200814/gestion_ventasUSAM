<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ubicacionController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Departamento');
		$this->load->model('Municipio');
	}

	public function index(){
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Ubicacion/Index',
				'data_view'   => array()
			); 
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function departamento(){
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Ubicacion/departamento_view',
				'data_view'   => array()
			); 
			$data['listar'] = $this->Departamento->get_departamentos();
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function manttoDeparta()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Ubicacion/manttoDeparta',
				'data_view'   => array()
			);

			
			if ($this->uri->segment(3)!=' ') {
				$id = $this->uri->segment(3);
				$data['update'] = $this->Departamento->get_one_departamento($id);
			}
			$data['municipio'] = $this->Municipio->get_municipios();
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function nuevoDeparta()
	{
		$datos = array(
			'NOMBRE_DEPARTAMENTO' => $this->input->post('txtNombreDepart'),
			'ID_MUNICIPIO' => $this->input->post('txtId_municipio')
		);
		$sql = $this->Departamento->set_departamento($datos);
		if($sql == true){
			redirect(base_url().'ubicacionController/departamento');
		}
	}

	public function editarDeparta()
	{
		$datos = array(
			'NOMBRE_DEPARTAMENTO' => $this->input->post('txtNombreDepart'),
			'ID_MUNICIPIO' => $this->input->post('txtId_municipio'),
		);
		$id = $this->input->post('txtId');
		$sql = $this->Departamento->update_departamento($id,$datos);
		if($sql == true){
			redirect(base_url().'ubicacionController/departamento');
		}
	}

	public function eliminarDeparta()
	{
		if ($this->uri->segment(3)!=' ') {
			$id = $this->uri->segment(3);
			if($this->Departamento->delete_departamento($id)){
				redirect(base_url().'ubicacionController/departamento');
			}
		}
	}


// Municipios
	public function municipio(){
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Ubicacion/municipio_view',
				'data_view'   => array()
			); 
			$data['listar'] = $this->Municipio->get_municipios();
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}


	public function manttoMuni()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Ubicacion/manttoMuni',
				'data_view'   => array()
			);
			if ($this->uri->segment(3)!=' ') {
				$id = $this->uri->segment(3);
				$data['update'] = $this->Municipio->get_one_municipio($id);
			}
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function nuevoMuni()
	{
		$datos['NOMBRE_MUNICIPIO'] = $this->input->post('txtNombreMuni');
		$sql = $this->Municipio->set_municipio($datos);
		if($sql == true){
			redirect(base_url().'ubicacionController/municipio');
		}
	}

	public function editarMuni()
	{
		$datos = array(
			'NOMBRE_MUNICIPIO' => $this->input->post('txtNombreMuni')
		);
		$id = $this->input->post('txtId');
		$sql = $this->Municipio->update_municipio($id,$datos);
		if($sql == true){
			redirect(base_url().'ubicacionController/municipio');
		}
	}

	public function eliminarMunicipio()
	{
		if ($this->uri->segment(3)!=' ') {
			$id = $this->uri->segment(3);
			if($this->Municipio->delete_municipio($id)){
				redirect(base_url().'ubicacionController/municipio');
			}
		}
	}



}