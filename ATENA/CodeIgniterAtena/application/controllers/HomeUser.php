<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {
	private $url = array();
	public function __construct() {
		parent::__construct();
		$this->url['url'] = base_url();
		$this->load->library('parser');
		$this->load->library('session');
		if(!$this->session->userdata('logado')){
				redirect("welcome/entrar");
		}else if($this->session->userdata('status') == 0){
			redirect("welcome/entrar");
		}
		

	}

	public function index(){
		$user["usuario"] = $this->session->get_userdata();		
		$this->load->view('User/homeUser',$user);
	}
	
	public function homeUser(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->parser->parse('User/homeUser.php',$user);
	}
	
	public function livrosUser(){file:///home/www/ATENA/CodeIgniterAtena/application/controllers/HomeAdm.php
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		if($user['perfil'] == 1){
			$user['perfil'] = anchor(base_url('homeUser/adm'),"Administrar"); 
		}else{
			$user['perfil'] = "";		
		}
		$this->load->model('Conteudo');
		$user["livros"] = $this->Conteudo->pegaLivros();
		$this->parser->parse('User/livrosUser.php',$user);
	}
	public function enviarLivrosUser(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->parser->parse('User/enviarLivroUser.php',$user);
	}
	public function cadastrarLivro(){
		$user = $this->session->get_userdata();
		$livro['idUsuario'] = $this->session->userdata('idUsuario');
		$livro['titulo'] = $this->input->post('txtTitulo');
		$livro['autor'] = $this->input->post('txtAutor');
		$livro['descricao'] = $this->input->post('txtDescricao');
		$livro['permissao'] = 0;
		$arquivo = explode(".", $_FILES["imagem"]["name"]);
		$livro['foto'] = $arquivo[1];
		if($this->db->insert('livro',$livro)){
			echo '<html> <body>
						<script>
							alert("ENVIO REALIZADO! \n A publicação será realizada dentro de 1 dia");
							window.location = ("'.base_url().'homeUser/enviarLivrosUser");
						</script>
					</body> </html>';
		}else{
			'<html> <body>
						<script>
							alert("ERRO AO ENVIAR \n tente novamente");
							window.location = ("'.base_url().'homeUser/enviarLivrosUser");
						</script>
					</body> </html>';
		}
	}
	
	
	public function textosUser(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		if($user['perfil'] == 1){
			$user['perfil'] = anchor(base_url('homeUser/adm'),"Administrar"); 
		}else{
			$user['perfil'] = "";		
		}
		$this->load->model('Conteudo');
		$user["textos"] = $this->Conteudo->pegaTextos();
		$this->parser->parse('User/textosUser.php',$user);
	}
	
	public function dicasUser(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		if($user['perfil'] == 1){
			$user['perfil'] = anchor(base_url('homeUser/adm'),"Administrar"); 
		}else{
			$user['perfil'] = "";		
		}		
		$this->load->model('Conteudo');
		$user["dicas"] = $this->Conteudo->pegaDicas();
		$this->parser->parse('User/dicasUser.php',$user);
	}
	
	public function enviarDicasUser(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->parser->parse('User/enviarDicaUser.php',$user);
	}
	public function cadastrarDica(){
		$user = $this->session->get_userdata();
		$dica['idUsuario'] = $this->session->userdata('idUsuario');
		$dica['titulo'] = $this->input->post('txtTitulo');
		$dica['descricao'] = $this->input->post('txtDescricao');
		$dica['permissao'] = 0;
		if($this->db->insert('dica',$dica)){
			echo '<html> <body>
						<script>
							alert("ENVIO REALIZADO! \n A publicação será realizada dentro de 1 dia");
							window.location = ("'.base_url().'homeUser/enviarDicasUser");
						</script>
					</body> </html>';
		}else {
			'<html> <body>
						<script>
							alert("ERRO AO ENVIAR \n tente novamente");
							window.location = ("'.base_url().'homeUser/enviarLivrosUser");
						</script>
					</body> </html>';		
		}
	}
	
	public function dica(){
		$this->parser->parse('enviardica.php',$this->url);
	}
	
	public function adm(){
		redirect("homeAdm",$user[0]);	
	}

	public function logout()
	{
		redirect(base_url("Login/logout"));
	}
}
