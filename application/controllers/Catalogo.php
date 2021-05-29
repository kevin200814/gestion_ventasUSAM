<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('catalogoModel');
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
						'page_title' => 'Inicio',
						'view' => 'celular',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$phone = $this->catalogoModel->getProducto();
					$data['phone']  = $phone;

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
						'page_title' => 'Inicio',
						'view' => 'celular',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$phone = $this->catalogoModel->getProducto();
					$data['phone']  = $phone;

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'celular',
				'data_view' => array()
			);

			$phone = $this->catalogoModel->getProducto();
			$data['phone']  = $phone;

			$this->load->view('template/main_view',$data);
		}
		
	}

	public function audio()
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
						'page_title' => 'Inicio',
						'view' => 'audio',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$audio = $this->catalogoModel->getProAudio();
					$data['audio']  = $audio;

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
						'page_title' => 'Inicio',
						'view' => 'audio',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$audio = $this->catalogoModel->getProAudio();
					$data['audio']  = $audio;

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'audio',
				'data_view' => array()
			);

			$audio = $this->catalogoModel->getProAudio();
			$data['audio']  = $audio;

			$this->load->view('template/main_view',$data);
		}

	}

	public function computacion()
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
						'page_title' => 'Inicio',
						'view' => 'computacion',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$com = $this->catalogoModel->getProCom();
					$data['com']  = $com;

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
						'page_title' => 'Inicio',
						'view' => 'computacion',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$com = $this->catalogoModel->getProCom();
					$data['com']  = $com;

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'computacion',
				'data_view' => array()
			);

			$com = $this->catalogoModel->getProCom();
			$data['com']  = $com;

			$this->load->view('template/main_view',$data);
		}
		
	}

	public function almacenamiento()
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
						'page_title' => 'Inicio',
						'view' => 'almacenamiento',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$almacena = $this->catalogoModel->getProAlmacena();
					$data['almacena']  = $almacena;

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
						'page_title' => 'Inicio',
						'view' => 'almacenamiento',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$almacena = $this->catalogoModel->getProAlmacena();
					$data['almacena']  = $almacena;

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'almacenamiento',
				'data_view' => array()
			);

			$almacena = $this->catalogoModel->getProAlmacena();
			$data['almacena']  = $almacena;

			$this->load->view('template/main_view',$data);
		}
		
	}

	public function video()
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
						'page_title' => 'Inicio',
						'view' => 'video',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$video = $this->catalogoModel->getProVideo();
					$data['video']  = $video;

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
						'page_title' => 'Inicio',
						'view' => 'video',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$video = $this->catalogoModel->getProVideo();
					$data['video']  = $video;

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'video',
				'data_view' => array()
			);

			$video = $this->catalogoModel->getProVideo();
			$data['video']  = $video;

			$this->load->view('template/main_view',$data);
		}

	}

	public function verDetalle($id)
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
						'page_title' => 'Inicio',
						'view' => 'single',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$producto = $this->catalogoModel->getAllProducto($id);
					$data['producto']  = $producto;

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
						'page_title' => 'Inicio',
						'view' => 'single',
						'data_view' => array()
					);

					$data['info'] = $this->Login_model->verificarRol($usuario);
					$producto = $this->catalogoModel->getAllProducto($id);
					$data['producto']  = $producto;

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'single',
				'data_view' => array()
			);

			$producto = $this->catalogoModel->getAllProducto($id);
			$data['producto']  = $producto;

			$this->load->view('template/main_view',$data);
		}
		
	}

	//mantenimiento de productos admin

	public function CatalogoAdmin()
	{
		$data_view =array(
			'page_title' => 'Catalogo',
			'view' => 'Catalogo/Catalogo',
			'data_view' =>  array()
		);

		//MOSTRAR
		$data_view['prod'] = $this->catalogoModel->getCatalogo();
		$this->load->view('template/main_view',$data_view);
	}

	public function VistaProd() 
	{
		$data_view =array(
			'page_title' => 'Catalogo',
			'view' => 'Catalogo/AddProducto',
			'data_view' =>  array()
		);
		$prov =$this->catalogoModel->SelectProv(); //SELECT DE PROVEEDORES
		$data_view['prov'] = $prov;

		$cat =$this->catalogoModel->SelectCat();//SELECT DE CATEGORIAS DE PRODUCTOS
		$data_view['cat'] = $cat;

		$this->load->view('template/main_view',$data_view);
	}

	public function InsertProd()
	{
		$config['upload_path'] = './assets/images/Upload/'; //CONFIGURACIONES DE LA IMAGEN
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['max_width'] = '2024';
		$config['max_height'] = '2008';
		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload("NOMBRE_IMAGEN")) {
			$data['error'] = $this->upload->display_errors();
			
		} else {

			$file_info = $this->upload->data();

            //$this->Miniatura($file_info['file_name']);

			$CODIGO_PRODUCTO= $this->input->post('CODIGO_PRODUCTO');
			$NOMBRE_PRODUCTO= $this->input->post('NOMBRE_PRODUCTO');
			$NOMBRE_IMAGEN= $file_info['file_name'];
			$MARCA= $this->input->post('MARCA');
			$ESPECIFICACIONES= $this->input->post('ESPECIFICACIONES');
			$ID_PROVEEDOR= $this->input->post('ID_PROVEEDOR');
			$ID_CATEGORIA= $this->input->post('ID_CATEGORIA');
			$STOCK_INICIAL= $this->input->post('STOCK_INICIAL');
			$ENTRADAS= $this->input->post('ENTRADAS');
			$SALIDAS= $this->input->post('SALIDAS');
			$CANTIDAD_EXISTENCIA= $this->input->post('CANTIDAD_EXISTENCIA');
			$PRECIO= $this->input->post('PRECIO');
			$ESTADO= $this->input->post('ESTADO');
			$OFERTA= $this->input->post('OFERTA');
			
			$data = array(
				"CODIGO_PRODUCTO" => $CODIGO_PRODUCTO,
				"NOMBRE_PRODUCTO" => $NOMBRE_PRODUCTO,
				"NOMBRE_IMAGEN" => $NOMBRE_IMAGEN,
				"MARCA" => $MARCA,
				"ESPECIFICACIONES" => $ESPECIFICACIONES,
				"ID_PROVEEDOR" => $ID_PROVEEDOR,
				"ID_CATEGORIA" => $ID_CATEGORIA,
				"STOCK_INICIAL" => $STOCK_INICIAL,
				"ENTRADAS" => $ENTRADAS,
				"SALIDAS" => $SALIDAS,
				"CANTIDAD_EXISTENCIA" => $CANTIDAD_EXISTENCIA,
				"PRECIO" => $PRECIO,
				"ESTADO" => $ESTADO,
				"OFERTA" => $OFERTA
			);

			$guardar= $this->catalogoModel->AddProd($data);
			$this->CatalogoAdmin();
		}
	}

	public function EliminarProd($ID_PRODUCTO){
		$this->catalogoModel->DeleteProd($ID_PRODUCTO);
		$this->CatalogoAdmin();
	}

	public function EditProducto($ID_PRODUCTO){

		$data_view =array(
			'page_title' => 'Proveedores',
			'view' => 'Catalogo/EditProducto',
			'data_view' =>  array()

		);
		$data_view['pro']= $this->catalogoModel->ObtenerProd($ID_PRODUCTO);
		$this->load->view('template/main_view',$data_view);
	}

	public function Actualizar()
	{

		$config['upload_path'] = './productos_upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['max_width'] = '2024';
		$config['max_height'] = '2008';
		$this->load->library('upload',$config);
		
		$this->upload->do_upload("NOMBRE_IMAGEN");
		$data['error'] = $this->upload->display_errors();
		
		

		$file_info = $this->upload->data();

            //$this->Miniatura($file_info['file_name']);
		$ID_PRODUCTO = $this->input->post('ID_PRODUCTO');
		$CODIGO_PRODUCTO= $this->input->post('CODIGO_PRODUCTO');
		$NOMBRE_PRODUCTO= $this->input->post('NOMBRE_PRODUCTO');
		$NOMBRE_IMAGEN= $file_info['file_name'];
		$MARCA= $this->input->post('MARCA');
		$ESPECIFICACIONES= $this->input->post('ESPECIFICACIONES');
		$ID_PROVEEDOR= $this->input->post('ID_PROVEEDOR');
		$ID_CATEGORIA= $this->input->post('ID_CATEGORIA');
		$STOCK_INICIAL= $this->input->post('STOCK_INICIAL');
		$ENTRADAS= $this->input->post('ENTRADAS');
		$SALIDAS= $this->input->post('SALIDAS');
		$CANTIDAD_EXISTENCIA= $this->input->post('CANTIDAD_EXISTENCIA');
		$PRECIO= $this->input->post('PRECIO');
		$ESTADO= $this->input->post('ESTADO');
		$OFERTA= $this->input->post('OFERTA');
		
		$prod = array(
			"ID_PRODUCTO" => $ID_PRODUCTO,
			"CODIGO_PRODUCTO" => $CODIGO_PRODUCTO,
			"NOMBRE_PRODUCTO" => $NOMBRE_PRODUCTO,
			"NOMBRE_IMAGEN" => $NOMBRE_IMAGEN,
			"MARCA" => $MARCA,
			"ESPECIFICACIONES" => $ESPECIFICACIONES,
			"ID_PROVEEDOR" => $ID_PROVEEDOR,
			"ID_CATEGORIA" => $ID_CATEGORIA,
			"STOCK_INICIAL" => $STOCK_INICIAL,
			"ENTRADAS" => $ENTRADAS,
			"SALIDAS" => $SALIDAS,
			"CANTIDAD_EXISTENCIA" => $CANTIDAD_EXISTENCIA,
			"PRECIO" => $PRECIO,
			"ESTADO" => $ESTADO,
			"OFERTA" => $OFERTA
		);


		$guardar= $this->catalogoModel->ActualizarProd($prod);
		$this->CatalogoAdmin();

	}
	





}
