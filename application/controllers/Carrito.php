<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('carritoModel'); //Modelo de carrito
		$this->load->model('Login_model'); //modelo del login
		$this->load->library('cart'); //libreria para la funcionalidad del carrito

	}

//Carga la tabla de los productos que han sido agregados al carrito
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

//Agrega productos a la tabla de carrito y regresa a la vista del carrito
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
			redirect(base_url().'Carrito/index');
		}
		else
		{
			redirect(base_url().'Catalogo/index');
		}

	}


//Borra toda la lista de productos de la tabla del carrito y regresa a la vista del carrito
	public function vaciarCarrito(){

		$this->cart->destroy();
		redirect(base_url().'Carrito/index');
	}

	public function actualizarCarrito(){

		$data = $this->input->post();
		$this->cart->update($data);

		redirect(base_url().'Carrito/index');
	}

//Elimina un producto de la tabla del carrito y regresa a la vista del carrito
	public function eliminarItem($item){
		$data = array(
			'rowid'   => $item,
			'qty'     => 0
		);

		$this->cart->update($data); 
		redirect(base_url().'Carrito/index');
	}


//Registra la compra de los productos del carrito y regresa a la vista del carrito
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
