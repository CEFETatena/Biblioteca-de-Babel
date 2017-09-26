<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudo extends CI_Model {
	public function pegaLivros($quantos = 6) {
		$this->db->limit($quantos);
	  	$this->db->order_by('id','random');
	  	return $this->db->get('livro')->result();
	}
	public function pegaDicas($quantos = 6) {
		$this->db->limit($quantos);
	  	$this->db->order_by('id','random');
	  	return $this->db->get('dica')->result();
	}
	public function pegaTextos($quantos = 6) {
		$this->db->limit($quantos);
	  	$this->db->order_by('id','random');
	  	return $this->db->get('texto')->result();
	}
	
}