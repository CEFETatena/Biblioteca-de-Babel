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
    $user= $this->Usuarios->pegaUsuario($usuario);
	 /*$ok=false;
    foreach ($users as $u) {
             if(($usuario == $u["nomeDeUsuario"] || $usuario==$u["email"]) && $senha == $u["senha"]){
              $ok =true;
            }
    }*/
    if($user['nomeDeUsuario'] == $nome || $user['email'] == $nome && $senha == $user['senha'] ){
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
  }
	public function logout(){
  	$this->session->sess_destroy();
    redirect("Welcome/entrar");
 	}
  
}
