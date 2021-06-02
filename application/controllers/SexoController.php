<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SexoController extends CI_Controller {

	// Funcion del constructor Inicializa el modelo
	public function __construct()
	{
		parent::__construct(); //relacion hereda funciones del modelo
		$this->load->model('Sexo'); //carga del modelo
		$this->load->model('Login_model'); //carga del modelo
	}

	// Funcion que retorna una vista principal para el mantenimiento
	public function index(){
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{

					//de ser verdad
					$data = array(
						'page_title'  => 'Administración', //Titulo de la pagina
						'view'        => 'Sexo/sexo_view', //Vista
						'data_view'   => array() //declaracion de arreglo
					);

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);
					//obtiene todos los datos para listarlos en la vista
					$data['listar'] = $this->Sexo->get_sexos();
					//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
					$this->load->view('template/main_view',$data);
										
				}
				else // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					redirect(base_url(). 'Store/index');
				}
			}
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}
	
	// Funcion que retorna una vista donde se puede insertar un nuevo registro o actualizar alguno existente
	public function add_sexo(){
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != '')
		{
			$usuario = $this->session->userdata('NICK');
			$info = $this->Login_model->verificarRol($usuario);

			foreach ($info->result() as $row)
			{
				if ($row->ID_ROL == 1) // VALIDACION PARA ENTRAR COMO ADMIN
				{

					$data = array(
						'page_title'  => 'Administración', //Titulo de la pagina
						'view'        => 'Sexo/sexo_add', //Vista
						'data_view'   => array() //declaracion de arreglo
					);

					//Aqui inicia el proceso para actualizar
					//si se ha recuperado de forma Get un Identificador automaticamente sabrá que queremos actualizar o modificar un registro por lo tanto hará lo siguiente
					if ($this->uri->segment(3)!=' ') { 
						//recuperara un Indentificador por medio de un GET
						$id_sexo = $this->uri->segment(3);
						//envia el Identificador al modelo para posteriormente hacer una consulta la cual retornara todos los datos de ese Identificador
						$data['sexo_update'] = $this->Sexo->get_one_sexo($id_sexo);
					}

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);
					//aqui finaliza
					//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
					$this->load->view('template/main_view',$data);
										
				}
				else // VALIDACION PARA ENTRAR COMO CLIENTE
				{
					redirect(base_url(). 'Store/index');
				}
			}
		}
		else
		{
			redirect(base_url(). 'Store/index');
		}
	}

	// Funcion accion de insertar nuevo registro
	public function nuevoSexo()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != '')
		{
			// recupera el dato de la entrada y es guarda por una variable
			$sexo['SEXO'] = $this->input->post('txtSexo');
			$sql = $this->Sexo->set_sexo($sexo); //realiza el paso de parametros al modelo entegando la variable con los datos
			if($sql == true){ //si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'SexoController/');
			}

		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}

	}

	// Funcion accion de Actualizar o modificar un registro seleccionado
	public function editar()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			//guarda los datos modificados en una array
			$datos = array(
				'SEXO' => $this->input->post('txtSexo')
			);
			$id = $this->input->post('txtId_sexo'); //Recupera el identificador 
			$sql = $this->Sexo->update_sexo($id,$datos); //realiza el paso de parametros al modelo entegando la variable con los datos y el identificador

			if($sql == true){ //si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'SexoController/');
			}

		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

	//Funcion accion de Eliminar un registro 
	public function eliminar()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			// Si el identificador existe por medio del metodo GET hará
			if ($this->uri->segment(3)!=' ') {
				//recupera el Identificador 
				$id_sexo = $this->uri->segment(3);
				//realiza el paso de parametros al modelo entegando la variable el identificador
				if($this->Sexo->delete_sexo($id_sexo)){
					//si la eliminacion fue exitosa redirige a la pagina principal del mantenimiento
					redirect(base_url().'SexoController/');
				}
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

}