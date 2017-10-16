<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Brian" >

    <title>ATENA</title>

    <!-- Bootstrap core CSS -->
    <?php
      echo link_tag("assets/vendor/bootstrap/css/bootstrap.min.css");


      echo link_tag("assets/vendor/font-awesome/css/font-awesome.min.css");
      echo link_tag("https://fonts.googleapis.com/css?family=Montserrat:400,700");
      echo link_tag("https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic");


      echo link_tag("assets/css/freelancer.min.css");
      echo link_tag("assets/css/estilo.css");
    ?>

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body class="index" id="page-top">

    <!-- Navigation -->
     <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
       <div class="container">
        		
            <a class="navbar-brand" href="{url}homeUser"><img src="../assets/img/exemplo3.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="{url}homeUser/livrosUser">LIVROS</a>
				<a class="navbar-brand" href="{url}homeUser/dicasUser">DICAS</a>
            <a class="navbar-brand" href="{url}homeUser/textosUser">TEXTOS</a>
            <a class="navbar-brand" href="#about">SOBRE</a>

            <div class="collapse navbar-collapse" id="navbarExample">
        			<ul class="navbar-nav ml-auto">
               	<li class="dropdown">
               		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{nomeDeUsuario}<span class="caret"></span></button>
        					
        					<ul class="dropdown-menu">  
        						<li><?php echo anchor(base_url("homeUser/perfilUser"),"Perfil"); ?></li>      						
          					<li><?php echo anchor(base_url("homeUser/enviarLivrosUser"),"Enviar Livro"); ?></li>
          					<li><?php echo anchor(base_url("homeUser/enviarDicasUser"),"Enviar Dica"); ?></li>
          					<div class="dropdown-divider"></div>        					
								{perfil}    					
          					<li><?php echo anchor(base_url('homeUser/logout'), "Logout"); ?></li>
          					
        					</ul>

     					 </li>
               </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Grid Section -->
    <br>
    <section id="portfolio">
        <div class="col-lg-8 offset-lg-2">
            <h2 class="text-center">LIVROS</h2>
            <hr class="star-primary">
             <div class='box1'>           
            	<?php 
						echo "<table id='tabela_livros' border = '0.5'>" .
                    "<tr>" .
                      "<th width = '10%'></th>" .
                      "<th width = '30%'></th>" .

                    "</tr>";
                    foreach($livros as $livro){
                      if($livro->permissao == 1){
                        echo  "<tr>" .
                              "<td><img src='{url}img/publicacoes/" . $livro->idLivro. "." .$livro->foto."' width='200'</td>" .
                              "<td><b>Título:</b> <div class='livroTitulo'><b>" . $livro->titulo . "</b></div>" .
                              "<hr>Autor: <div class='livroAutor'>" . $livro->autor ."</div>" .
                              "<hr>Descrição: <div class='livroDescricao'>" . $livro->descricao ."<hr><br></div></td>";

                      }
                    }
                    echo "</tr>" . "<hr>" .
                  "</table>";           
					?>
				</div>
		
						
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <h2 class="text-center">SOBRE</h2>
            <hr class="star-light">
            <div class="row">
                <div class="col-lg-4 offset-lg-2">
                    <p>Este é um projeto idealizado pela professora Keilla Petrin e orientado pelo professor Lázaro Eduardo realizado durante o ano de 2017 na disciplina de</p>
                </div>
                <div class="col-lg-4">
                    <p> LPTI pelos alunos : Brian Henrique Messias, Karollina Paiva, Luiz Henrique Silvério e Victor Cabral, do 3º Informática do CEFET-MG Varginha.</p>
                </div>
            </div>
        </div>
    </section>


    </section>

   

   
    <!-- Bootstrap core JavaScript -->
    <script src="{url}assets/vendor/jquery/jquery.min.js"></script>
    <script src="{url}assets/vendor/tether/tether.min.js"></script>
    <script src="{url}assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="{url}assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{url}assets/js/jqBootstrapValidation.js"></script>
    <script src="{url}assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{url}assets/js/freelancer.min.js"></script>

</body>

</html>
