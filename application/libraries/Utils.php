<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('DATOSUSUARIO', "datos_usuario");

class Utils {

    public function __construct() {
        //  require_once APPPATH.'third_party/Utils.php';
    }

    /**
     * Carga la vista básica de una página: header, vista y footer.
     *
     * @param controlador $contexto   Desde dónde se llamará a la vista
     * @param string $vista      El nombre de la vista que se cargará después del header
     * @param array  $data       Arreglo con los campos que usará templates/header y $vista
     */
    public static function carga_pagina_basica($contexto, $vista = '', $data) {
        $contexto->load->view($vista, $data);
    }// carga_pagina_basica()


    /**
     * Comprueba si en la sesión existe valor para la clave 'nombre_usuario'
     *
     * @param CI_Controller $contexto  Controlador en donde se
     * desea verificar si existe sesión abierta.
     *
     * @return boolean TRUE si existe valor para la clave 'nombre_usuario'
     */
    public static function haySesionAbierta($contexto) {
        return $contexto->session->has_userdata(DATOSUSUARIO);
    }


    public static function get_usuario_sesion($contexto) {
        if (Utils::haySesionAbierta($contexto)) {
            return $contexto->session->userdata(DATOSUSUARIO);
        } else {
            return null;
        }
    }

}// class Utils
