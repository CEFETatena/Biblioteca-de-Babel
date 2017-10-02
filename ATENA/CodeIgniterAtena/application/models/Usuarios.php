<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	 public function conferir($nomeDeUsuario,$email) {
	 	return $resultado = $this->db->query("SELECT * FROM usuario WHERE nomeDeUsuario = '$nomeDeUsuario' OR email = '$email'")->result();
	 }
    public function pegaUsuarios($id = NULL) {
    	return $resultado = $this->db->query("SELECT * FROM usuario")->result();
    }
    public function pegaUsuario($nome){
    	return $resultado = $this->db->query("SELECT * FROM usuario WHERE nomeDeUsuario = '$nome' OR email = '$nome'")->result_array();
    }
    
    public function email($email){
    	return $resultado = $this->db->query("SELECT * FROM usuario WHERE email = '$email'")->result_array();
    }
    public function busca($nome){
    	$this->db->like('nomeDeUsuario',$nome);
    	$this->db->or_like('nome',$nome);
    	$this->db->or_like('sobrenome',$nome);
    	$this->db->or_like('email',$nome);
    	return $this->db->get('usuario')->result();
    }	
  }
?>
