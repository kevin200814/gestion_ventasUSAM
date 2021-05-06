<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecoveryController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Recovery_Model');
	}

	public function recoveryPassword_Alt()
	{
		$data = array(
			'page_title'  => 'Recuperación de contraseña',
			'view'        => 'Recovery/recovery_password_alt',
			'data_view'   => array()
		);
		$this->load->view('template/main',$data);
	}

	public function recoveryQuery()
	{
		$data['data_view']  = array();
		$data['page_title'] = 'Recuperación de contraseña';
		$data['view']       = 'Recovery/recovery_query';

		$correo        = $this->input->post('txtEmail');
		$usuario       = $this->input->post('txtUsuario');
		$data['datos'] = $this->Recovery_Model->ConsultarRecuperacion($correo,$usuario);
		$this->load->view('template/main',$data);
	}

	public function recoveryVefication()
	{
		$pregunta  = $this->input->post('txtPregunta');
		$email     = $this->input->post('txtEmail');
		$respuesta = md5($this->input->post('txtRespuesta'));

		$sql = $this->Recovery_Model->ConsultaVerificacion($pregunta,$email,$respuesta);

		if(empty($sql)){
			redirect(base_url().'RecoveryController/recoveryPassword_Alt');
		}else{
			$data['data_view']  = array();
			$data['page_title'] = 'Recuperación de contraseña';
			$data['view']       = 'Recovery/Change_Password';

			$data['usuario'] = $sql;
			$this->load->view('template/main',$data);
		}
	}

	public function restablecer()
	{
		$id = $this->input->post('id_usuario');
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
		$sql = $this->Recovery_Model->UpdatePassword($datos,$id);
		if($sql == true){
			redirect(base_url().'RecoveryController/');
		}else{
			redirect(base_url().'RecoveryController/recoveryPassword_Alt');
		}
		
	}
}
