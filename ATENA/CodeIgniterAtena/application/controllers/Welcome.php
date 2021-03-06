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
			$dados['nome'] = $this->input->post('txtName');
			$dados['sobrenome'] = $this->input->post('txtSobrenome');
			$dados['nomeDeUsuario'] = $this->input->post('txtUsername');
			$dados['email'] = $this->input->post('txtEmail');
			$dados['senha'] = sha1($this->input->post('txtSenha'));
			$senha = sha1($this->input->post('txtConfirma'));
			$user = $this->Usuarios->conferir($dados['nomeDeUsuario'],$dados['email']);
			if(empty($user)){
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
										alert("Nome de Usuario ou e-mail já cadastrados!");
										location.href="../welcome/cadastrar";

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
	
	public function esqueci(){
		$this->parser->parse("pegarEmail.php",$this->url);	
	}	
	public function busca_conta(){
		$this->load->model("Usuarios");
		$user = $this->Usuarios->email($this->input->post("txt_email"));
		if(!empty($user[0])){
			$mensagem = $this->load->view("emails/recuperar_senha.php",$user[0],TRUE);
			$this->load->library('email');
			$this->email->from("cefetatena2017@gmail.com","Confirmação de cadastro");
			$this->email->to($user[0]['email']);
			$this->email->subject('BIBLIOTECA DE BABEL - Recuperação de conta');
			$this->email->message($mensagem);
			if($this->email->send()){
				$this->parser->parse('recuperacao_senha',$this->url);					
				
			}else{
				print_r($this->email_print_debugger());			
			}	
		}else{
			echo '<script>
								 alert("Não há uma conta registrada com esse e-mail.");
								 location.href="javascript:history.go(-1)";

						 </script>';
		}
	}
	public function mudar_senha($Id){
		$user['url'] = base_url();
		$user['id'] = $Id;
		$this->parser->parse("mudar_senha",$user);	
	}
	public function alterar_senha(){
		$id = $this->input->post('txt_id');
		$dados['senha'] = sha1($this->input->post('txt_senha1'));
		$senha= sha1($this->input->post('txt_senha2'));		
		if($dados['senha'] == $senha){
			$this->db->where('md5(idUsuario)',$this->input->post('txt_id'));
			if($this->db->update('usuario',$dados)){
				echo '<script>
								 alert("Alteração efetuada.");
								 location.href="../welcome/entrar";

						 </script>';
			}
		}else{
			echo '<script>
								 alert("Senhas não combinam");
								 location.href="javascript:history.go(-1)";

						 </script>';	
		}
	}
}
