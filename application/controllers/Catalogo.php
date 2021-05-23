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
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'celular',
				'data_view' => array()
			);

			$usuario = $this->session->userdata('NICK');
			$data['info'] = $this->Login_model->verificarRol($usuario);
			$phone = $this->catalogoModel->getProducto();
			$data['phone']  = $phone;

			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}

	public function audio()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'audio',
				'data_view' => array()
			);

			$usuario = $this->session->userdata('NICK');
			$data['info'] = $this->Login_model->verificarRol($usuario);
			$audio = $this->catalogoModel->getProAudio();
			$data['audio']  = $audio;

			$this->load->view('template/main_view',$data);

		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}

	}

	public function computacion()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'computacion',
				'data_view' => array()
			);

			$usuario = $this->session->userdata('NICK');
			$data['info'] = $this->Login_model->verificarRol($usuario);
			$com = $this->catalogoModel->getProCom();
			$data['com']  = $com;

			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}

	public function almacenamiento()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'almacenamiento',
				'data_view' => array()
			);

			$usuario = $this->session->userdata('NICK');
			$data['info'] = $this->Login_model->verificarRol($usuario);
			$almacena = $this->catalogoModel->getProAlmacena();
			$data['almacena']  = $almacena;

			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}

	public function video()
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'video',
				'data_view' => array()
			);

			$usuario = $this->session->userdata('NICK');
			$data['info'] = $this->Login_model->verificarRol($usuario);
			$video = $this->catalogoModel->getProVideo();
			$data['video']  = $video;

			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}

	}

	public function verDetalle($id)
	{
		if($this->session->userdata('NICK') != '')
		{
			$data = array(
				'page_title' => 'Inicio',
				'view' => 'single',
				'data_view' => array()
			);

			$usuario = $this->session->userdata('NICK');
			$data['info'] = $this->Login_model->verificarRol($usuario);
			$producto = $this->catalogoModel->getAllProducto($id);
			$data['producto']  = $producto;

			$this->load->view('template/main_view',$data);

		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}
}