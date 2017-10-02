<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdm extends CI_Controller {
	private $url = array();
	public function __construct() {
		parent::__construct();
		$this->url['url'] = base_url();
		$this->load->library('parser');
		$this->load->library('session');
		$this->load->library('upload');
		if(!$this->session->userdata('logado')){
				redirect("welcome/entrar");
		}
		if($this->session->userdata('perfil') == 0){
				redirect("homeUser");
		}
	}
//CARREGA AS VIEWS
	public function index()
	{
		$this->load->view('Administrador/homeAdm');
	}
	
	public function homeAdm(){
		$this->parser->parse('User/homeUser.php',$this->url);
	}
	public function livroAdm(){
		$this->parser->parse('Administrador/enviarLivro.php',$this->url);
	}	
	
	public function textoAdm(){
		$this->parser->parse('Administrador/enviarTexto.php',$this->url);
	}
	
	
	public function dicaAdm(){
		$this->parser->parse('Administrador/enviarDica.php',$this->url);
	}

	public function logout()
	{
		redirect(base_url("Login/logout"));
	}
	
//GERENCIA AS PUBLICAÇÕES FEITAS PELOS USUÁRIOS
	public function gerenciarLivros() {
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->load->model('Conteudo');
		$user["livros"] = $this->Conteudo->pegaLivros();
		$this->parser->parse('Administrador/gerenciarLivros.php',$user);
	}
	public function gerenciarDicas() {
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->load->model('Conteudo');
		$user["dicas"] = $this->Conteudo->pegaDicas();
		$this->parser->parse('Administrador/gerenciarDicas.php',$user);
	}
	public function gerenciarUsuarios(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->load->model("Usuarios");
		$user['usuarios'] = $this->Usuarios->pegaUsuarios();
		$this->parser->parse('Administrador/gerenciarUsuarios.php',$user);
	}
	//BUSCA
	public function buscarUsuario(){
		$this->load->model('Usuarios');
		$dados['usuarios'] = $this->Usuarios->busca($this->input->post('txt_busca'));
		$this->load->view('Administrador/buscaUsuario',$dados);
	}
}