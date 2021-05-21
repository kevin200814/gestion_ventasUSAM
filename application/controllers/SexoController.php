<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SexoController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sexo');
	}

	public function index(){
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Sexo/sexo_view',
				'data_view'   => array()
			);

			$data['listar'] = $this->Sexo->get_sexos();
			//Metodo de editar
			if ($this->uri->segment(3)!=' ') {
				$id_sexo = $this->uri->segment(3);
				$data['sexo_update'] = $this->Sexo->get_one_sexo($id_sexo);
			}
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}
	
	public function add_sexo(){
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'Sexo/sexo_add',
				'data_view'   => array()
			);
			if ($this->uri->segment(3)!=' ') {
				$id_sexo = $this->uri->segment(3);
				$data['sexo_update'] = $this->Sexo->get_one_sexo($id_sexo);
			}
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function nuevoSexo()
	{
		$sexo['SEXO'] = $this->input->post('txtSexo');
		$sql = $this->Sexo->set_sexo($sexo);
		if($sql == true){
			redirect(base_url().'SexoController/');
		}
	}

	public function editar()
	{
		$datos = array(
			'SEXO' => $this->input->post('txtSexo')
		);
		$id = $this->input->post('txtId_sexo');
		$sql = $this->Sexo->update_sexo($id,$datos);
		if($sql == true){
			redirect(base_url().'SexoController/');
		}
	}

	public function eliminar()
	{
		if ($this->uri->segment(3)!=' ') {
			$id_sexo = $this->uri->segment(3);
			if($this->Sexo->delete_sexo($id_sexo)){
				redirect(base_url().'SexoController/');
			}
		}
	}

}