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
				<h2 class="text-center2">BIBLIOTECA DE BABEL</h2>            
				<div class="collapse navbar-collapse" id="navbarExample">
        			<ul class="navbar-nav ml-auto">
               	<li><?php echo anchor(base_url("homeAdm/gerenciarLivros"),"VOLTAR", array("class" => "btn btn-mediun btn-primary")) ?></li>             
                </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Grid Section -->
    <br>
    <section id="portfolio">
        <div class="container">
        	<br>  
        	<h2 class="text-center">ALTERAR DADOS</h2>
            <hr class="star-primary">            
            <hr>
				<div class="col-lg-6 offset-lg-3">
						<?php 
							echo form_open(base_url("DicasAdm/alterar")) . 
								form_hidden("idDica",$dica[0]->idDica) .
								form_label("Título: ","txt_titulo") .	"<br>" .							
								form_input("txt_titulo",$dica[0]->titulo) . "<br>" .
								form_label("Descrição: ","txt_descricao") . "<br>" .
								form_textarea("txt_descricao",$dica[0]->descricao) . "<br>" .
								form_submit("btn_alterar", "ALTERAR") . 
								form_close();					
						?>				
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