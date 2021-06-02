<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecoveryController extends CI_Controller {

	// Funcion del constructor Inicializa el modelo
	public function __construct()
	{
		parent::__construct(); //relacion hereda funciones del modelo
		$this->load->model('Recovery_Model'); //carga del modelo

	}

	// Funcion que retorna una vista, la cual tiene un formulario el cual servira para enviar datos para realizar la recuperacion de contraseña
	public function recoveryPassword_Alt()
	{
		if($this->session->userdata('NICK') != '')
		{
			redirect(base_url(). 'Store/index');
		}else
		{
			$data = array(
				'page_title'  => 'Recuperación de contraseña', //Titulo de la pagina
				'view'        => 'Recovery/recovery_password_alt', //Vista del formulario
				'data_view'   => array() //declara un array que son los datos anteriores
			);
			//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
			$this->load->view('template/main_view',$data);
		}
		
	}

	// Funcion que retorna una vista, la cual retorna una busqueda de datos que se ingreso en la funcion function recoveryPassword_Alt()
	public function recoveryQuery()
	{
		if($this->session->userdata('NICK') != '')
		{
			redirect(base_url(). 'Store/index');
		}else
		{
			$data['data_view']  = array(); //Se declara un arreglo
			$data['page_title'] = 'Recuperación de contraseña'; //Titulo de la pagina
			$data['view']       = 'Recovery/recovery_query'; //Vista del formulario

			$correo        = $this->input->post('txtEmail'); //recupera el dato de correo recupera el dato de la entrada y es guarda por una variable
			$usuario       = $this->input->post('txtUsuario'); //recupera el dato de nombre de usuario recupera el dato de la entrada y es guarda por una variable
			
			// esta funcion realiza una busqueda por medio del modelo a la base de datos) ($correo y $usuario), si los datos que recupera existen en ella
			$data['datos'] = $this->Recovery_Model->ConsultarRecuperacion($correo,$usuario);
			//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
			$this->load->view('template/main_view',$data);
		}
		
	}

	//Funcion que retorna una vista, la cual retorna los datos consultados con exito de function recoveryQuery()
	public function recoveryVefication()
	{
		if($this->session->userdata('NICK') != '')
		{
			redirect(base_url(). 'Store/index');
		}else
		{
			$pregunta  = $this->input->post('txtPregunta'); //recupera el dato de correo ya recuperado por el sistema
			$email     = $this->input->post('txtEmail'); //recupera el dato de nombre de usuario ya recuperado por el sistema
			$respuesta = md5($this->input->post('txtRespuesta')); //obtiene dato de una entrada el cual es un  dato que el usuario se debe de acordar y lo encripta con un hash

			// esta funcion realiza una busqueda por medio del modelo a la base de datos) ($correo,$usuario y $respuesta), si los datos que recupera existen en ella, en este caso solo $respuesta es lo que ingresara el usuario
			$sql = $this->Recovery_Model->ConsultaVerificacion($pregunta,$email,$respuesta);

			// realiza una operacio si la variable $sql retorna dato vacio entonces
			if(empty($sql)){
				//redirige al proceso de inicio y el usuario tendrá que volver a hacer todos los pasos de nuevo
				redirect(base_url().'RecoveryController/recoveryPassword_Alt');
			}else{ //si $sql retorna varios valores entonces
				$data['data_view']  = array(); //declara un array
				$data['page_title'] = 'Recuperación de contraseña'; //Titulo de la pagina
				$data['view']       = 'Recovery/Change_Password'; //Vista del formulario

				$data['usuario'] = $sql; //tiene toda la informacion del usuario almacenada
				//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
				$this->load->view('template/main_view',$data);
			}
		}
		
	}

	// Funcion que recibe los parametros de la vista de la funcion recoveryVefication() para su posterior actualizacion
	public function restablecer()
	{

		if($this->session->userdata('NICK') != '')
		{
			redirect(base_url(). 'Store/index');
		}else
		{
			$id = $this->input->post('id_usuario'); //Identificador fundamental para el cambio de contraseña
			//Datos que retorno el sistema del usuario
			$datos = array(
				'NOMBRES'            => $this->input->post('nombres'),
				'APELLIDOS'          => $this->input->post('apellidos'),
				'EDAD'               => $this->input->post('edad'),
				'ID_SEXO'            => $this->input->post('id_sexo'),
				'EMAIL'              => $this->input->post('email'),
				'NICK'               => $this->input->post('nick'),
				'CONTRASENA'         => md5($this->input->post('txtContrasena')),
				'TIPO_USUARIO'       => $this->input->post('tipo_usuario'),
				'RECOVERY_PREGUNTA'  => $this->input->post('recovery_pregunta'),
				'RECOVERY_RESPUESTA' => $this->input->post('recovery_respuesta'),
				'ID_ROL'             => $this->input->post('id_rol')
			);
			//realiza la consulta al modelo le pasa los datos y el identificador para su posterior cambio
			$sql = $this->Recovery_Model->UpdatePassword($datos,$id);
			//Si la consulta due un exito y retorno verdadero
			if($sql == true){
				//reenvia al usuario a logearse porque el cambio de su contraseña fue un exito
				redirect(base_url().'Login/Login_view');
			}else{ //sino fue verdadero
				//algo fallo
				redirect(base_url().'RecoveryController/recoveryPassword_Alt');
			}
			
		}
		
	}
}
