<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Brian" >

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

<body class="index" id="page-top" background="assets/img/babelcinza.png">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <div class="container">
        		<a class="navbar-brand" href=""><img src="assets/img/logoadm.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="homeAdm/livroAdm">LIVROS</a>
            <a class="navbar-brand" href="homeAdm/textoAdm">TEXTOS</a>
            <a class="navbar-brand" href="homeAdm/dicaAdm">DICAS</a>
            <ul class="navbar-nav ml-auto">
            	<li class="dropdown">
        						<?php echo anchor(base_url("#"),"GERENCIAR",
        							array("class" => "dropdown-toggle","data-toggle"=>"dropdown")); ?>
        						<ul class="dropdown-menu">
          						<li><?php echo anchor(base_url("homeAdm/gerenciarLivros"),"LIVROS") ?></li>
          						<li><?php echo anchor(base_url("homeAdm/gerenciarDicas"),"DICAS") ?></li>
          						<li><?php echo anchor(base_url("homeAdm/gerenciarUsuarios"),"USUÁRIOS") ?></li>
          					</ul>
          		</li> 
          	</ul>           
   

            <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">

                   <li class="dropdown">
        					<?php echo anchor(base_url("#"),"ADMINISTRADOR",
        						array("class" => "dropdown-toggle","data-toggle"=>"dropdown")); ?>
        					<ul class="dropdown-menu">
          					<li><?php echo anchor(base_url("homeUser"),"Sair") ?></li>
          					
        					</ul>

     					 </li>
             
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <img class="img-fluid" id="img1" src="assets/img/logoadm.png" alt="">
            <div class="intro-text">
                <span class="name">BIBLIOTECA DE BABEL</span><br>
                <h3 class="name">ADMINISTRAÇÃO</h3>
                
            </div>
        </div>
    </header>

     <!-- About Section -->


    </section>


   

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
