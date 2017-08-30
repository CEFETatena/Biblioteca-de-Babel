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
            <a class="navbar-brand" href="../">INÍCIO</a>
            <a class="navbar-brand" href="livros">LIVROS</a>
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



    <!-- Login Section -->
     <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <br><br><h2>Recuparar Senha</h2>
            <hr class="star-primary">
          </div>
        </div>
        <div class="row">

            <!-- To configure the contact form email address, go to mail/contact_me.php
            and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not
            working you may need to configure your web server differently. -->
				<form name="redsenha" id="redefinir_senha"  method="POST" action="../Login/redefinir_senha" enctype="multipart/form-data">

              <div class="row control-group">
                <div class="form-group col-xs-4 floating-label-form-group controls">
                  <label>Nova senha</label>
                  <input type="password" class="form-control" placeholder="Nova senha" id="novaSenha" name="novaSenha" required="">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group col-xs-4 floating-label-form-group controls">
                  <label>Confirmar senha</label>
                  <input type="password" class="form-control" placeholder="Confirmar senha" id="confirmarSenha" name="confirmarSenha" required="">
                  <p class="help-block text-danger"></p>
                </div>                
              </div>
              <div class="entrar">
				  <div class="col-lg-12 text-center">
					  <br>
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
				</div>
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

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                    </div>

                    <div class="footer-col col-md-4">
                        <h3>LOCAL</h3>
                        <p>Av. dos Imigrantes, 1000 - Vargem</p>
                        <p>VARGINHA - MG</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; CEFET-MG 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="{url}#page-top">
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