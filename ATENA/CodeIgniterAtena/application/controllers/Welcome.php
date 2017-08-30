<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $url = array();
	public function __construct() {
		parent::__construct();
		$this->url['url'] = base_url();
		$this->load->library('parser');
		$this->load->library('session');
	}

	public function index()
	{
		$this->parser->parse('inicio.php',$this->url);
	}
	public function livros(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->load->model('Conteudo');
		$user["livros"] = $this->Conteudo->pegaLivros();
		$this->parser->parse('livros.php',$user);
	}
	public function textos(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->load->model('Conteudo');
		$user["textos"] = $this->Conteudo->pegaTextos();
		$this->parser->parse('textos.php',$user);
	}
	
	public function dicas(){
		$user = $this->session->get_userdata();
		$user['url'] = base_url();
		$this->load->model('Conteudo');
		$user["dicas"] = $this->Conteudo->pegaDicas();
		$this->parser->parse('dicas.php',$user);
	}

	public function entrar(){
		$this->session->sess_destroy();
		$this->parser->parse('entrar.php',$this->url);
	}
	public function cadastrar(){
		$this->session->sess_destroy();
		$this->parser->parse('cadastrar.php',$this->url);
	}	
	
	
	

	public function cadastrarUsuario(){
			$this->load->model("Usuarios");
			$users= $this->Usuarios->pegaUsuarios();

			$dados['nome'] = $this->input->post('txtName');
			$dados['nomeDeUsuario'] = $this->input->post('txtUsername');
			$dados['email'] = $this->input->post('txtEmail');
			$dados['senha'] = sha1($this->input->post('txtSenha'));
			$senha = sha1($this->input->post('txtConfirma'));
			$ok=true;
			foreach ($users as $u) {
				if($dados["nomeDeUsuario"] == $u["nomeDeUsuario"] || $dados["email"] == $u["email"]){
					$ok =false;
				}
			}
			if($ok == true){
				if($dados['senha'] == $senha){
					if($this->db->insert('usuario',$dados)){
						$array = array("logado"=>TRUE);
						$usuario = $dados['nomeDeUsuario'];
						$user = $this->Usuarios->pegaUsuario($usuario);
    					$array = array_merge($array,$user[0]);
						$this->session->set_userdata($array);							  						
						echo '<script>
										alert("CADASTO EFETUADO!");
							  	</script>';
						redirect("homeUser");							 
							  								  		
					}else{
							echo '<script>
											alert("CADASTRO NÃO EFETUADO!");
											location.href="../welcome/cadastrar";

									  </script>';
						 }
				}else{
					 echo '<script>
										alert("SENHAS NÃO COMBINAM!");
										location.href="../welcome/cadastrar";

								</script>';
				}
			}else{
				echo '<script>
								 alert("NOME DE USUÁRIO OU E-MAIL JÁ EXISTEM!");
								 location.href="javascript:history.go(-1)";

						 </script>';
			}
	}

}
