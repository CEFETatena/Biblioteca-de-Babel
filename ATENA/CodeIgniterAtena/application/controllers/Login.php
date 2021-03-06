<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	private $url = array();
	public function __construct() {
		parent::__construct();
		$this->url['url'] = base_url();
      $this->load->library('session');
		$this->load->library('parser');
	}

	public function index()
	{
		$this->parser->parse('login.php',$this->url);
	}

  public function efetuar_login(){
    $this->load->model("Usuarios");
    $usuario = $this->input->post('txtUsername');
    $senha = sha1($this->input->post('txtSenha')); 
    $user = $this->Usuarios->pegaUsuario($usuario);  
     if($user[0]['nomeDeUsuario'] == $usuario || $user[0]['email'] == $usuario){
     		if($senha == $user[0]['senha'] ){
    			$array = array("logado"=>TRUE);
    			$user = $this->Usuarios->pegaUsuario($usuario);
    			$array = array_merge($array,$user[0]);
     			$this->session->set_userdata($array);
     			redirect("homeUser");      
      	}else{
      		$this->session->sess_destroy();
				echo '<script>
							alert("NOME DE USUARIO/EMAIL ou SENHA inválidos");
							location.href="../welcome/entrar";
						</script>';
      	}
    }else{
      $this->session->sess_destroy();
		/*echo '<script>
					alert("NOME DE USUARIO/EMAIL ou SENHA inválidos");
					location.href="../welcome/entrar";
				</script>';*/
				redirect("welcome/entrar");	
    }
  }
	public function logout(){
  	$this->session->sess_destroy();
    redirect("Welcome/entrar");
 	}
  
}
