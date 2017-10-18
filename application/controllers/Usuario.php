<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct() {
			parent::__construct();

			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('Utils');
	}


	function index() {
		 if ($this->session->has_userdata(DATOSUSUARIO)) {
			 $usuario_session = $this->utils->get_usuario_sesion($this);
				$data['titulo'] = "Usuario";
				$data['esta_logueado'] = $usuario_session['nombre']." ".$usuario_session['paterno']." ".$usuario_session['materno'];
			 $this->load->view('usuario/index', $data);
		 }else{
			 redirect('index/', 'refresh');
		 }
	}// index

}// class Login
