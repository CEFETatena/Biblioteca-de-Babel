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

</head>

<body class="index" id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <a class="navbar-brand" href="{url}welcome"><img src="{url}assets/img/exemplo3.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="{url}welcome/livros">LIVROS</a>
            <a class="navbar-brand" href="{url}welcome/dicas">DICAS</a>
            <a class="navbar-brand" href="{url}welcome/textos">TEXTOS</a>
            <a class="navbar-brand" href="#about">SOBRE</a>

            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="entrar">Entrar</a>
								
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Login Section -->
     <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 text-center offset-lg-2">
            <br><br><h2>ALTERAR SENHA</h2>
            <hr class="star-primary">
          </div>
          	<div class="col-lg-8 text-center offset-lg-2">
          <form   method="POST" action="../alterar_senha"  >
          	<div class="col-lg-8 text-center offset-lg-2">
                 	<input type="hidden" class="form_control text-center" placeholder= '<?php echo $id ?>' id="txt_id" name="txt_id" VALUE="{id}">
          <input type="password" class="form-control text-center" placeholder="Senha Nova" id="txt_senha1" name="txt_senha1" required="" pattern=".{8,}" required title ="Minimo 8 caracteres" data-validation-required-message="Insira nova senha">
   		<p class="help-block text-danger"></p>      
        
          
          <input type="password" class="form-control text-center" placeholder="Confirmar Senha Nova" id="txt_senha2" name="txt_senha2" required="" data-validation-required-message="Insira nova senha novamente">
			<p class="help-block text-danger"></p>          

            
					  <br>
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
				    
          
          
        </div>
       	</form>
       	</div>
        
        </div>
      </div>
    </section>
	<br>

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

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="{url}#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



    <!-- Bootstrap core JavaScript -->


</body>

</html>