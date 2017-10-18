<?php

class Usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

     function get_user_login($username, $password)
     {
       $string = "SELECT *
                  FROM  usuario
                  WHERE username = '".$username."' AND clave=md5('".$password."')";
       $query = $this->db->query($string);

       return $query->result_array();
     }// get_user_login()


}
