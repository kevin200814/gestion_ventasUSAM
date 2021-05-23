<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	function __construct()
	{
		parent::__construct();
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
					'page_title' => 'Store Online/ Administrar',
					'view' => 'other',
					
					'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
					);

					$this->load->view('template/main_view',$data);
				}
				elseif ($row->ID_ROL == 2) // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					$data = array(
					'page_title' => 'Store Online',
					'view' => 'home',
					'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
					);

					$this->load->view('template/main_view',$data);
				}
			}
		}
		else
		{
			$data = array(
			'page_title' => 'Store Online',
			'view' => 'home',
			'data_view' => array()
			);

			$this->load->view('template/main_view',$data);
		}
		
	}

	public function home()
	{
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			
			$data = array(
				'page_title' => 'Store Online',
				'view' => 'home',
				
				'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
			);

			$this->load->view('template/main_view',$data);
		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}


	public function about()
	{
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$data = array(
				'page_title' => 'Store Online / ¿Quienes somos? ',
				'view' => 'about',

				'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
			);

			$this->load->view('template/main_view',$data);

		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}

	public function ofertas()
	{
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			
			$data = array(
				'page_title' => 'Store Online / ofertas ',
				'view' => 'oferta',
				
				'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
			);

			$this->load->view('template/main_view',$data);

		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}

	public function contacto()
	{
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$data = array(
				'page_title' => 'Store Online / contacto ',
				'view' => 'contacto',
				
				'data_view' => array('info' => $this->Login_model->verificarRol($usuario))
			);

			$this->load->view('template/main_view',$data);

		}
		else
		{
			redirect(base_url()."Login/Login_view");
		}
		
	}
}