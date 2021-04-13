<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function Login_view()
	{
		if($this->session->userdata('NICK') != '')
		{
			redirect(base_url(). 'Store/index');
		}
		else
		{
			$data["page_title"] = "Login";

			$this->load->view('TemplateLogin/headerLogin',$data);
			$this->load->view('login');
		}
		

	}

	public function validateUser()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Usuario', 'required');
		$this->form_validation->set_rules('password-field', 'Contraseña', 'required');
		if ($this->form_validation->run())
		{
			# True...
			$usuario = $this->input->post('username');
			$password = $this->input->post('password-field');
			
			$comprobar = $this->Login_model->logeo($usuario, $password);
			if ($comprobar == true)
			{
				$session_data = array(
					'NICK' => $usuario
				);

				$this->session->set_userdata($session_data);
				redirect(base_url().'Store/index');
			}
			else
			{
				$data['msj_error'] = "Credenciales Incorrectas";
				$data["page_title"] = "Login";
				$this->load->view("TemplateLogin/headerLogin", $data);
				$this->load->view("Login", $data);
			}

		}
		else
		{
			# False...
			$data['msj_error'] = "Es necesario que ingrese sus datos";
			$data["page_title"] = "Login";
			$this->load->view("TemplateLogin/headerLogin", $data);
			$this->load->view("Login", $data);
		}
	}

	public function cerrar_sesion()
	{
		$this->session->unset_userdata('NICK');
		redirect(base_url(). 'Store/index');
	}

	
}
