<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('carritoModel');
		$this->load->model('Login_model');
		$this->load->library('cart');

	}

	public function index()
	{
		$data = array(
			'page_title' => 'Producto',
			'view' => 'carrito',
			'data_view' => array()
		);

		$producto = $this->carritoModel->getProducto();
		$data['producto']  = $producto;

		

		$this->load->view('template/main_view',$data);
	}

	public function agregarCarrito(){

		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'id' => $_POST['ID_PRODUCTO'],
				'name' => $_POST['NOMBRE_PRODUCTO'],
				'qty' => $_POST['CANTIDAD'],
				'price' => $_POST['PRECIO']
			);


			$this->cart->insert($data);
			redirect(base_url().'Carrito/datosCarrito');
		}
		else
		{
			redirect(base_url().'Catalogo/index');
		}
		
	}

	public function datosCarrito(){

		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$data = array(
				'page_title' => 'Producto',
				'view' => 'carrito',
				'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
			);

			$this->load->view('template/main_view',$data);

		}
		else
		{
			$data = array(
				'page_title' => 'Producto',
				'view' => 'carrito',
				'data_view' => array()
			);

			$this->load->view('template/main_view',$data);
		}
	}

	public function vaciarCarrito(){

		$this->cart->destroy();
		redirect(base_url().'Carrito/datosCarrito');
	}

	public function actualizarCarrito(){

		$data = $this->input->post();
		$this->cart->update($data);

		redirect(base_url().'Carrito/datosCarrito');
	}


	public function eliminarItem(){
		$data = array(
			'rowid'   => $rowid,
			'qty'     => 0
		);

		$this->cart->update($data); 
		redirect(base_url().'Carrito/datosCarrito');
	}



	public function registrarDatos(){
		

		
		for($i=0; $i < count($_POST['ID_PRODUCTO']); $i++){

			$data = array(
				'ID_PRODUCTO' => $_POST['ID_PRODUCTO'][$i],
				'FECHA_COMPRA' => $_POST['FECHA'],
				'NOMBRE_PRODUCTO' => $_POST['PRODUCTO'][$i],
				'PRECIO_PRODUCTO' => $_POST['PRECIO'][$i],
				'CANTIDA_PRODUCTO' => $_POST['CANTIDAD'][$i],
				'SUBTOTAL_PRODUCTO' => $_POST['SUBTOTAL'][$i],
				'TOTAL_PAGO' => $_POST['TOTAL_FINAL']
			);
			$this->carritoModel->insertProducto($data);

		}
		
		$this->cart->destroy();
		
		$this->index();	

	}




}
