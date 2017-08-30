<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alunos" >

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
               	<a href="#" class="dropdown-toggle" data-toggle="dropdown">{nomeDeUsuario}</a>
        					<ul class="dropdown-menu">  
        						{perfil}   											        						
        						<li><?php echo anchor(base_url('homeUser/EnviarLivrosUser'),"Enviar Livro") ?></li>
          					<li><?php echo anchor(base_url('homeUser/EnviarDicasUser'),"Enviar Dica") ?></li>
          					<li><?php echo anchor(base_url('homeUser/logout'),"Logout") ?></li>
        					</ul>

     					 </li>
               </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Grid Section -->
    <br>
    <section id="portfolio">
        <div class="container">
            <h2 class="text-center">TEXTOS</h2>
            <hr class="star-primary">
           	<div class="dicas">
           	 <?php 
					foreach($textos as $texto){					
						
							echo "<hr><div class='box1'>" .									 
								  		"<b>" .$texto->titulo ."</b><br>" .
								  		"<b>" .$texto->autor ."</b><br>" . 							  	
							  			$texto->texto . "<br>" .
								  	"</div>";
						  
					}           
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

    

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>VIDAS SECAS</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="{url}assets/img/portfolio/vidassecas.jpg" alt="">
                                <p>Livro muito bom, uma bela obra de Graciliano Ramos</p>
                                <ul class="list-inline item-details">
                                    <li>Usuário:
                                        <strong><p>VictorCabral029</p>
                                    </strong>
                                    </li>
                                    <li>Data:
                                        <strong><p>25/05/2017<p>
                                    </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <!-- INí
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



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
