<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busca extends CI_Model {
	 public function buscaLivros($nome){
    	$this->db->like('titulo',$nome);
    	$this->db->or_like('descricao',$nome);
    	$this->db->or_like('autor',$nome);
    	return $this->db->get('livro')->result();
    } 
    
     public function buscaDicas($nome){
    	$this->db->like('titulo',$nome);
    	$this->db->or_like('descricao',$nome);
    	return $this->db->get('dica')->result();
    } 
}