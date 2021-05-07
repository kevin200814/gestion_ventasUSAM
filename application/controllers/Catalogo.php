<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('catalogoModel');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Inicio',
			'view' => 'celulares',
			'data_view' => array()
		);

		$phone = $this->catalogoModel->getProducto();
		$data['phone']  = $phone;

		$this->load->view('template/main_view',$data);
	}

	public function audio()
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

	public function computacion()
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

	public function almacenamiento()
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

	public function video()
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

	public function verDetalle($id)
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
