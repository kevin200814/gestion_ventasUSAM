<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ubicacionController extends CI_Controller {

	// Funcion del constructor Inicializa el modelo
	public function __construct()
	{
		parent::__construct(); //relacion hereda funciones del modelo
		$this->load->model('Departamento'); //carga del modelo
		$this->load->model('Municipio'); //carga del modelo
		$this->load->model('Login_model'); //carga del modelo
	}

	// Funcion que retorna una vista principal 
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
						'view'        => 'Ubicacion/Index', //Vista
						'data_view'   => array() //declaracion de arreglo
					); 

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);

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

	// Funcion que retorna una vista principal
	public function departamento(){
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
						'view'        => 'Ubicacion/departamento_view', //Vista
						'data_view'   => array() //declaracion de arreglo
					); 

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);

					//obtiene todos los datos para listarlos en la vista
					$data['listar'] = $this->Departamento->get_departamentos();
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
	public function manttoDeparta()
	{
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
						'view'        => 'Ubicacion/manttoDeparta', //Vista 
						'data_view'   => array() //declaracion de arreglo
					);

					//Aqui inicia el proceso para actualizar
					//si se ha recuperado de forma Get un Identificador automaticamente sabrá que queremos actualizar o modificar un registro por lo tanto hará lo siguiente
					if ($this->uri->segment(3)!=' ') {
						//recuperara un Indentificador por medio de un GET
						$id = $this->uri->segment(3);
						//envia el Identificador al modelo para posteriormente hacer una consulta la cual retornara todos los datos de ese Identificador
						$data['update'] = $this->Departamento->get_one_departamento($id);
					}

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);
					$data['municipio'] = $this->Municipio->get_municipios();
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
	public function nuevoDeparta()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			// recupera el dato de la entrada y es guarda por una variable
			$datos = array(
				'NOMBRE_DEPARTAMENTO' => $this->input->post('txtNombreDepart'),
				'ID_MUNICIPIO' => $this->input->post('txtId_municipio')
			);
			$sql = $this->Departamento->set_departamento($datos); //realiza el paso de parametros al modelo entegando la variable con los datos
			if($sql == true){ //si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'ubicacionController/departamento');
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

	// Funcion accion de Actualizar o modificar un registro seleccionado
	public function editarDeparta()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			//guarda los datos modificados en una array
			$datos = array(
				'NOMBRE_DEPARTAMENTO' => $this->input->post('txtNombreDepart'),
				'ID_MUNICIPIO' => $this->input->post('txtId_municipio'),
			);
			$id = $this->input->post('txtId'); //Recupera el identificador 
			$sql = $this->Departamento->update_departamento($id,$datos); //realiza el paso de parametros al modelo entegando la variable con los datos y el identificador
			if($sql == true){
				//si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'ubicacionController/departamento');
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

	//Funcion accion de Eliminar un registro
	public function eliminarDeparta()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			// Si el identificador existe por medio del metodo GET hará
			if ($this->uri->segment(3)!=' ') {
				//recupera el Identificador 
				$id = $this->uri->segment(3);
				//realiza el paso de parametros al modelo entegando la variable el identificador
				if($this->Departamento->delete_departamento($id)){
					//si la eliminacion fue exitosa redirige a la pagina principal del mantenimiento
					redirect(base_url().'ubicacionController/departamento');
				}
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}


// Municipios
	
	// Funcion que retorna una vista principal para el mantenimiento
	public function municipio(){
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
						'view'        => 'Ubicacion/municipio_view', //Vista
						'data_view'   => array() //declaracion de arreglo
					); 

					$usuario = $this->session->userdata('NICK');
					$data['info'] = $this->Login_model->verificarRol($usuario);
					//obtiene todos los datos para listarlos en la vista
					$data['listar'] = $this->Municipio->get_municipios();
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
	public function manttoMuni()
	{
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
						'view'        => 'Ubicacion/manttoMuni', //Vista
						'data_view'   => array() //declaracion de arreglo
					);

					//Aqui inicia el proceso para actualizar
					//si se ha recuperado de forma Get un Identificador automaticamente sabrá que queremos actualizar o modificar un registro por lo tanto hará lo siguiente
					if ($this->uri->segment(3)!=' ') {
						//recuperara un Indentificador por medio de un GET
						$id = $this->uri->segment(3);
						//envia el Identificador al modelo para posteriormente hacer una consulta la cual retornara todos los datos de ese Identificador
						$data['update'] = $this->Municipio->get_one_municipio($id);
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
	public function nuevoMuni()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			// recupera el dato de la entrada y es guarda por una variable
			$datos['NOMBRE_MUNICIPIO'] = $this->input->post('txtNombreMuni'); 
			$sql = $this->Municipio->set_municipio($datos); //realiza el paso de parametros al modelo entegando la variable con los datos
			if($sql == true){
				//si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'ubicacionController/municipio');
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

	// Funcion accion de Actualizar o modificar un registro seleccionado
	public function editarMuni()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			//guarda los datos modificados en una array
			$datos = array(
				'NOMBRE_MUNICIPIO' => $this->input->post('txtNombreMuni')
			);
			$id = $this->input->post('txtId'); //Recupera el identificador 
			$sql = $this->Municipio->update_municipio($id,$datos); //realiza el paso de parametros al modelo entegando la variable con los datos y el identificador
			if($sql == true){
				//si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'ubicacionController/municipio');
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

	//Funcion accion de Eliminar un registro 
	public function eliminarMunicipio()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			// Si el identificador existe por medio del metodo GET hará
			if ($this->uri->segment(3)!=' ') {
				//recupera el Identificador 
				$id = $this->uri->segment(3);
				//realiza el paso de parametros al modelo entegando la variable el identificador
				if($this->Municipio->delete_municipio($id)){
					//si la eliminacion fue exitosa redirige a la pagina principal del mantenimiento
					redirect(base_url().'ubicacionController/municipio');
				}
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}



}