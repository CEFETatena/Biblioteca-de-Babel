<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DicasAdm extends CI_Controller {
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
	}
	public function publicarDica(){
		$dados['titulo'] = $this->input->post('txtTitulo');
		$dados['descricao'] = $this->input->post('txtDescricao');
		$dados['idUsuario'] = $this->session->userdata('idUsuario');
		$dados['permissao'] = 1;
		if($this->db->insert('dica',$dados)){
			echo '
					<html> <body>
					<script>
						alert("PUBLICAÇÃO FEITA!");
						window.location = ("'.base_url().'homeAdm");
					</script>
					</body> </html>';
		}else{
			echo '
					<html> <body>
					<script>
						alert("ERRO AO PUBLICAR !");
						window.location = ("'.base_url().'homeAdm/dicaAdm");
					</script>
					</body> </html>';
		}
	}
	
	public function permitir($id){
		$dados['permissao'] = 1;
		$this->db->where('idDica',$id);
		if($this->db->update('dica',$dados)){
			echo '
					<html> <body>
					<script>
						alert("ALTERAÇÃO EFETUADA!");
						window.location = ("'.base_url().'homeAdm/gerenciarDicas");
					</script>
					</body> </html>';
		}else{
			echo '
					<html> <body>
					<script>
						alert("NÃO FOI POSSÍVEL FAZER A ALTERAÇÃO. TENTE NOVAMENTE!");
						window.location = ("'.base_url().'homeAdm/gerenciarDicas");
					</script>
					</body> </html>';
		}
	}
	
	public function corrigir($id){
		$this->db->where('idDica',$id);
		$dados['dica'] = $this->db->get("dica")->result();
		$this->load->view("Administrador/corrigirDica",$dados);
	}
	
	public function alterar() {
		$this->db->where('idDica',$this->input->post('idDica'));
		$dica['permissao'] = 1;
		$dica['titulo'] = $this->input->post('txt_titulo');
		$dica['descricao'] = $this->input->post('txt_descricao');
		if($this->db->update('dica',$dica)){
			echo '
					<html> <body>
					<script>
						alert("ALTERAÇÃO EFETUADA!");
						window.location = ("'.base_url().'homeAdm/gerenciarDicas");
					</script>
					</body> </html>';
		}else{
			echo '
					<html> <body>
					<script>
						alert("NÃO FOI POSSÍVEL FAZER A ALTERAÇÃO. TENTE NOVAMENTE!");
						window.location = ("'.base_url().'homeAdm/gerenciarDicas");
					</script>
					</body> </html>';
		}
	}
	
	public function recusar($id){
		$dica['permissao'] = 3;
		$this->db->where('idDica',$id);
		if($this->db->update('dica',$dica)){
			echo '
					<html> <body>
					<script>
						alert("ALTERAÇÃO EFETUADA!");
						window.location = ("'.base_url().'homeAdm/gerenciarDicas");
					</script>
					</body> </html>';		
		}else{
			echo '
					<html> <body>
					<script>
						alert("NÃO FOI POSSÍVEL FAZER A ALTERAÇÃO. TENTE NOVAMENTE!");
						window.location = ("'.base_url().'homeAdm/gerenciarDicas");
					</script>
					</body> </html>';
		}
	}
	public function buscar(){
		$termo = $this->input->post('txt_busca');
		$this->load->model("Busca");
		//$user = $this->session->get_userdata();
		$dados['dicas'] = $this->Busca->buscaDicas($termo);
		$dados['url'] = base_url();
		$this->parser->parse('Administrador/buscaDicas.php',$dados);
		
	}
	
}	