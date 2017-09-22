<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

    public function pegaUsuarios($id = NULL) {
    	return $resultado = $this->db->query("SELECT * FROM usuario")->result_array();
    }
    public function pegaUsuario($nome){
    	return $resultado = $this->db->query("SELECT * FROM usuario WHERE nomeDeUsuario = '$nome' OR email = '$nome'")->result_array();
    }	
  }
?>
