<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipoPagoController extends CI_Controller {

	//// Funcion del constructor Inicializa el modelo 
	public function __construct()
	{
		parent::__construct(); //relacion hereda funciones del modelo
		$this->load->model('tipo_pago'); //carga del modelo
	}

	//// Funcion que retorna una vista principal para el mantenimiento
	public function index(){
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != '')
		{
			//de ser verdad
			$data = array(
				'page_title'  => 'Administración', //Titulo de la pagina
				'view'        => 'TipoPago/Index', //Vista
				'data_view'   => array() //declaracion de arreglo
			);
			//obtiene todos los datos para listarlos en la vista
			$data['listar'] = $this->tipo_pago->get_tipo_pago();
			//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
			$this->load->view('template/main_view',$data);
		}
		else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Store/index');
		}
	}

	// Funcion que retorna una vista donde se puede insertar un nuevo registro o actualizar alguno existente
	public function manttoTipoPago()
	{
		if($this->session->userdata('NICK') != '')
		{
			// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
			$data = array(
				'page_title'  => 'Administración', //Titulo de la pagina
				'view'        => 'TipoPago/manttoTipoPago', //Vista
				'data_view'   => array() //declaracion de arreglo
			);
			
			//Aqui inicia el proceso para actualizar
			//si se ha recuperado de forma Get un Identificador automaticamente sabrá que queremos actualizar o modificar un registro por lo tanto hará lo siguiente
			if ($this->uri->segment(3)!=' ') {
				//recuperara un Indentificador por medio de un GET
				$id = $this->uri->segment(3);
				//envia el Identificador al modelo para posteriormente hacer una consulta la cual retornara todos los datos de ese Identificador
				$data['update'] = $this->tipo_pago->get_one_tipo_pago($id);
			}
			//aqui finaliza
			//Se carga la vista de la plantilla que tiene el estilo, las navbars y se le pasa el array de los datos
			$this->load->view('template/main_view',$data);
		}
		else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Store/index');
		}
	}

	public function nuevoTpago()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			// recupera el dato de la entrada y es guarda por una variable
			$tpago['TIPO_PAGO'] = $this->input->post('txtNombre');
			//realiza el paso de parametros al modelo entegando la variable con los datos
			$sql = $this->tipo_pago->set_tipo_pago($tpago);
			if($sql == true){ //si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'tipoPagoController/');
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}

	// Funcion accion de Actualizar o modificar un registro seleccionado
	public function editarTpago()
	{
		// Pregunta para acceder si se ha iniciado sesion si Nick es diferente a vacio
		if($this->session->userdata('NICK') != ''){
			//guarda los datos modificados en una array
			$datos = array(
				'TIPO_PAGO' => $this->input->post('txtNombre')
			);
			$id = $this->input->post('txtId'); //Recupera el identificador 
			$sql = $this->tipo_pago->update_tipo_pago($id,$datos); //realiza el paso de parametros al modelo entegando la variable con los datos y el identificador
			if($sql == true){ //si la consulta fue exitosa entonces
				//redirige a la pagina principal del mantenimiento
				redirect(base_url().'tipoPagoController/');
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
				$id = $this->uri->segment(3);
				//realiza el paso de parametros al modelo entegando la variable el identificador
				if($this->tipo_pago->delete_tipo_pago($id)){
					//si la eliminacion fue exitosa redirige a la pagina principal del mantenimiento
					redirect(base_url().'tipoPagoController/');
				}
			}
		}else //de no ser verdadero 
		{
			//redirecciona al login para iniciar sesion
			redirect(base_url(). 'Login/Login_view');
		}
		
	}
}