<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LivrosAdm extends CI_Controller {
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
	
	public function publicarLivro(){
		$dados['titulo'] = $this->input->post('txtNome');
		$dados['autor'] = $this->input->post('txtAutor');
		$dados['descricao'] = $this->input->post('txtDescricao');
		$dados['idUsuario'] = $this->session->userdata('idUsuario');
		$dados['permissao'] = 1;
		$arquivo = explode(".", $_FILES["imagem"]["name"]);
		$dados['foto'] = $arquivo[1];
		if($this->db->insert('livro',$dados)){
			$url['url'] = base_url();
			$url['idLivro'] = $this->db->insert_id();
			$config['upload_path'] = 'img/publicacoes';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = $url['idLivro'];
			$this->upload->initialize($config);
			$this->upload->do_upload('imagem');
			echo '
					<html> <body>
					<script>
						alert("PUBLICAÇÃO FEITA!");
						window.location = ("'.base_url().'homeAdm");
					</script>
					</body> </html>';
		}else {
			echo '
					<html> <body>
					<script>
						alert("ERRO AO PUBLICAR!");
						window.location = ("'.base_url().'homeAdm/livroAdm");
					</script>
					</body> </html>';
		}
		
		
	}
	
	public function permitir($id){
		$this->db->where('idLivro',$id);
		$dados['permissao'] = 1;
		if($this->db->update('livro',$dados)){
			echo '
					<html> <body>
					<script>
						alert("ALTERAÇÃO EFETUADA!");
						window.location = ("'.base_url().'homeAdm/gerenciarLivros");
					</script>
					</body> </html>';
		}
	}
	
	public function corrigir($id) {
		$this->db->where('idLivro',$id);
		$dados['livro'] = $this->db->get("livro")->result();
		$this->load->view("Administrador/corrigirLivro",$dados);
	}
	
	public function alterar(){
		$livro['permissao'] = 1;
		$livro['titulo'] = $this->input->post('txt_titulo');
		$livro['autor'] = $this->input->post('txt_autor');
		$livro['descricao'] = $this->input->post('txt_descricao');
		$this->db->where('idLivro', $this->input->post('idLivro'));
		if($this->db->update('livro',$livro)){
			echo '
					<html> <body>
					<script>
						alert("ALTERAÇÃO EFETUADA!");
						window.location = ("'.base_url().'homeAdm/gerenciarLivros");
					</script>
					</body> </html>';
		}else{
			echo '
					<html> <body>
					<script>
						alert("NÃO FOI POSSÍVEL FAZER A ALTERAÇÃO. TENTE NOVAMENTE");
						window.location = ("'.base_url().'homeAdm/gerenciarLivros");
					</script>
					</body> </html>';
		}
	}
	
	public function recusar($id){
		$livro["permissao"] = 3;
		$this->db->where('idLivro',$id);		
		if($this->db->update('livro',$livro)){
			echo '
					<html> <body>
					<script>
						alert("ALTERAÇÃO EFETUADA!");
						window.location = ("'.base_url().'homeAdm/gerenciarLivros");
					</script>
					</body> </html>';
		}else{
			echo '
					<html> <body>
					<script>
						alert("NÃO FOI POSSÍVEL FAZER A ALTERAÇÃO. TENTE NOVAMENTE");
						window.location = ("'.base_url().'homeAdm/gerenciarLivros");
					</script>
					</body> </html>';
		}
	}
	
}