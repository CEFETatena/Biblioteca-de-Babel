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
            <a class="navbar-brand" href="../"><img src="../assets/img/exemplo3.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="livros">LIVROS</a>
            <a class="navbar-brand" href="dicas">DICAS</a>
            <a class="navbar-brand" href="textos">TEXTOS</a>
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



    <!-- SignIn Section -->
     <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <br><br><h2>Cadastrar</h2>
            <hr class="star-primary">
          </div>
        </div>
        <div class="container">
        <div class="row control-group">
        <form name="signin" id="signin"  method="POST" action="../welcome/cadastrarUsuario" enctype="multipart/form-data">
          <div class="col-lg-4 text-center offset-lg-4">
          
          <input type="nome" class="form-control text-center" placeholder="Inserir Nome" id="txtName" name="txtName" required="" data-validation-required-message="Insira o nome">
                  <br></div>
                  
          <div class="col-lg-4 text-center offset-lg-4">
          
           <input type="nomeUsuario" class="form-control text-center" placeholder="Inserir Nome de Usuário" id="txtUsername" name="txtUsername" required="" data-validation-required-message="Insira nome de usuário valido">
                  <br></div>
                  
          <div class="col-lg-4 text-center offset-lg-4">
          
          <input type="email" class="form-control text-center" placeholder="Inserir Email" id="txtEmail" name="txtEmail" required="" data-validation-required-message="Insira email valido.">
                         <br></div>
                  
                  <div class="col-lg-4 text-center offset-lg-4">
          
         <input type="password" class="form-control text-center" placeholder="Inserir Senha" id="txtSenha" name="txtSenha" required="" data-validation-required-message="Insira sua senha">
                          <br></div>
                  
                  <div class="col-lg-4 text-center offset-lg-4">
          
         <input type="password" class="form-control" placeholder="Confirmar Senha" id="txtConfirma" name="txtConfirma" required="" data-validation-required-message="Confirme sua senha">
                          <br></div>
                  
          <div class="col-lg-4 text-center offset-lg-4">
					<a class="esquecisenha" href="#">Esqueci minha senha</a>
					<br>
		        </div>
              </div>
          <div class="col-lg-4 text-center offset-lg-4">
					  <br>
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
				</div>     
          
          
        </div>



            <!-- To configure the contact form email address, go to mail/contact_me.php
            and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not
            working you may need to configure your web server differently. -->
				<form name="signin" id="signin"  method="POST" action="../welcome/cadastrarUsuario" enctype="multipart/form-data">



              
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



    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="{url}assets/#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



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
