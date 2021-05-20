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
		$config = array(
			array(
		            'field' => 'username',
		            'label' => 'Usuario',
		            'rules' => 'required',
		            'errors' => array(
		            			'required' => 'Ingrese %s'
		            			)
		    ),
		    array(
		            'field' => 'password-field',
		            'label' => 'Contraseña',
		            'rules' => 'required',
		            'errors' => array(
		            			'required' => 'Ingrese %s'
		            			)
		    )
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == TRUE)
		{
			# True...
			$usuario = $this->input->post('username');
			$password = $this->input->post('password-field');
			
			$comprobar = $this->Login_model->logeo($usuario, md5($password));
			if ($comprobar == TRUE)
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
			$data["page_title"] = "Login";
			$this->load->view("TemplateLogin/headerLogin", $data);
			$this->load->view("Login", $data);
		}
	}

	public function registro_view()
	{
		if ($this->session->userdata('NICK') != '')
		{
			redirect(base_url(). 'Store/index');
		}
		else
		{
			$data["page_title"] = "Registrarse";
			$this->load->view("TemplateLogin/headerLogin", $data);
			$this->load->view("registrarse");
		}
	}

	public function inserUser()
	{
		$usuario["NOMBRES"] = $this->input->post('nombres');
		$usuario["APELLIDOS"] = $this->input->post('apellidos');
		$usuario["EDAD"] = $this->input->post('edad');
		$usuario["ID_SEXO"] = $this->input->post('sexo');
		$usuario["EMAIL"] = $this->input->post('correo');
		$usuario["NICK"] = $this->input->post('nick');
		$usuario["CONTRASENA"] = md5($this->input->post('pass'));
		$usuario["TIPO_USUARIO"] = 'Minorista';
		$usuario["ID_ROL"] = 2;
		//$usuario["confipass"] = $this->input->post('confipass');

		$comprobar = $this->Login_model->CrearUsuario($usuario);

		if ($comprobar = TRUE)
		{
			redirect(base_url(). 'Login/Login_view');
		}
		else
		{
			redirect(base_url(). 'Login/registro_view');
		}


	}


	public function cerrar_sesion()
	{
		$this->session->unset_userdata('NICK');
		redirect(base_url(). 'Store/index');
	}

	
}
