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
			$dados['sobrenome'] = $this->input->post('txtSobrenome');
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
						$this->enviar_email_confirmacao($dados);							 
							  								  		
					}else{
							echo '<script>
											alert("Houve um erro ao processar seu cadastro. Tente novamente!");
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

	public function enviar_email_confirmacao($dados){
			$mensagem = $this->load->view("emails/confirmar_cadastro.php",$dados,TRUE);
			$this->load->library('email');
			$this->email->from("cefetatena2017@gmail.com","Confirmação de cadastro");
			$this->email->to($dados['email']);
			$this->email->subject('BIBLIOTECA DE BABEL - confirmação de cadastro');
			$this->email->message($mensagem);
			$dadosConfirmados = $dados;
			if($this->email->send()){
				$this->parser->parse('cadastro_enviado',$this->url);
							
				
			}else{
				print_r($this->email_print_debugger());			
			}		
	}
	
	public function confirmar($hasEmail){
			$dados['status'] = 1;
			$this->db->where('md5(email)',$hasEmail);
			if($this->db->update('usuario',$dados)){
					
				$this->parser->parse('cadastro_liberado',$this->url);
									
			}else{
				echo "Houve um erro ao confirmar seu cadastro";			
			}		
	}	
}
