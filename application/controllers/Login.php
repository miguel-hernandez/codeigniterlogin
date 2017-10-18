<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('usuario_model');
		$this->load->library('Utils');
	}



	function validar_login(){
		$params = $this->get_params_login($this->input);
		$username = $params['login.username'];
		$password = $params['login.password'];

		$usuario = $this->usuario_model->get_user_login($username, $password);

		if(count($usuario)>0){
			$usuario = $usuario[0];
			$this->session->set_userdata(DATOSUSUARIO, $usuario);
			redirect('usuario/index', 'refresh');
		}
		else{
			$this->session->set_flashdata("login_result", "¡Datos no validos!");
			redirect('index/', 'refresh');
		}
	}// validar_login()

	private function get_params_login($input) {
		$resp = array(
			'login.username' => $input->post('username'),
			'login.password' => $input->post('password')
		);
		return $resp;
	}


	function cerrar_sesion() {
		$this->session->unset_userdata(array(DATOSUSUARIO));
		redirect('');
	}// cerrar_sesion()

	function redirige($tipousuario = '') {
		if (empty($tipousuario)) {
			return;
		}

		switch ($tipousuario) {
				case SUPERADMIN:
					redirect('admin/index');
				break;
				case CAPACITADOR:
					redirect('capacitador/index');
				break;
				default:
				break;
		}

	}// redirige()

}// class Login
