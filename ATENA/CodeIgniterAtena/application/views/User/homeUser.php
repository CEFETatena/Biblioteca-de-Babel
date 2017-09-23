<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="afile:///home/www/ATENA/CodeIgniterAtena/application/views/User/homeUser.php
uthor" content="Alunos" >

    <title>BIBLIOTECA DE BABEL</title>

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

<body class="index" id="page-top" background="assets/img/babelazul.png">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <a class="navbar-brand" href=""><img src="assets/img/exemplo3.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="homeUser/livrosUser">LIVROS</a>
            <a class="navbar-brand" href="homeUser/dicasUser">DICAS</a>
            <a class="navbar-brand" href="homeUser/textosUser">TEXTOS</a>
            <a class="navbar-brand" href="#about">SOBRE</a>          

            <div class="collapse navbar-collapse" id="navbarExample">
        			<ul class="navbar-nav ml-auto">
               	<li class="dropdown">
               		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $usuario["nomeDeUsuario"]?><span class="caret"></span></button>
        					
        					<ul class="dropdown-menu">  
        						<li><?php echo anchor(base_url("homeUser/perfilUser"),"Perfil"); ?></li>      						
          					<li><?php echo anchor(base_url("homeUser/enviarLivrosUser"),"Enviar Livro"); ?></li>
          					<li><?php echo anchor(base_url("homeUser/enviarDicasUser"),"Enviar Dica"); ?></li>
          					<div class="dropdown-divider"></div>        					
								<?php if($usuario["perfil"] == 1){
											echo anchor(base_url('homeUser/adm'),"Administrar");         						
        								} 
        						?>          					
          					<li><?php echo anchor(base_url('homeUser/logout'), "Logout"); ?></li>
          					
        					</ul>

     					 </li>
               </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
   <!-- Header -->
    <header class="masthead">
        <div class="container">
            
            <div class="col-lg-6 intro-text" style="float:right; padding-top:10%">
            
                <span class="name">BIBLIOTECA DE BABEL</span>
                <img class="img-fluid" id="img2" src="assets/img/estrela2.png" alt="">
                
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" style="padding-top:10%;
	padding-bottom:20%;
    position: relative;">
        
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

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <!-- INí
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/tether/tether.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->

    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/freelancer.min.js"></script>

</body>

</html>

