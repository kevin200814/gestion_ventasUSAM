<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipoPagoController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tipo_pago');
	}

	public function index(){
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'TipoPago/Index',
				'data_view'   => array()
			);
			$data['listar'] = $this->tipo_pago->get_tipo_pago();
			
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function manttoTipoPago()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title'  => 'Administración',
				'view'        => 'TipoPago/manttoTipoPago',
				'data_view'   => array()
			);
			//Metodo de editar
			if ($this->uri->segment(3)!=' ') {
				$id = $this->uri->segment(3);
				$data['update'] = $this->tipo_pago->get_one_tipo_pago($id);
			}
			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	public function nuevoTpago()
	{
		$tpago['TIPO_PAGO'] = $this->input->post('txtNombre');
		$sql = $this->tipo_pago->set_tipo_pago($tpago);
		if($sql == true){
			redirect(base_url().'tipoPagoController/');
		}
	}

	public function editarTpago()
	{
		$datos = array(
			'TIPO_PAGO' => $this->input->post('txtNombre')
		);
		$id = $this->input->post('txtId');
		$sql = $this->tipo_pago->update_tipo_pago($id,$datos);
		if($sql == true){
			redirect(base_url().'tipoPagoController/');
		}
	}

	public function eliminar()
	{
		if ($this->uri->segment(3)!=' ') {
			$id = $this->uri->segment(3);
			if($this->tipo_pago->delete_tipo_pago($id)){
				redirect(base_url().'tipoPagoController/');
			}
		}
	}
}