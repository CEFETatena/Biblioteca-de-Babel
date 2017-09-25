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
            <a class="navbar-brand" href="../manutencao">TEXTOS</a>
            <a class="navbar-brand" href="#about">SOBRE</a>

            <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">
                  <!--<?php echo anchor(base_url("homeUser/perfil",$dados[0]->nomeDeUsuario));?>-->
                    <li class="nav-item">
                    		<div class="enviarDica_Id">
                    		<?php
                      	echo anchor(base_url("homeUser/dica"),"ENVIAR DICA");
                      ?>
                    		</div>

                    	<!--  <a class="nav-link" href="entrar">Entrar</a>-->
                    </li>
                    <div class="enviarDica_Id">
                    <li class="nav-item">
                      <?php
                        echo anchor(base_url("Login/logout"),"LOGOUT");
                      ?>
                    </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Grid Section -->
    <br>
    <section id="portfolio">
        <div class="container">
            <h2 class="text-center">ENVIAR DICA</h2>
            <hr class="star-primary">
            
            <hr>
<div class="col-lg-6 offset-lg-3">
            <form name="nomedoform" action="xxxx" 
method="xxxx" >
<table>
<tr> 
<td><label>NOME DO LIVRO : </label></td>
<br><td><input name="nome" type="text" size="33" 
maxlength="1000"></td>
</tr>
<tr> 
<td><label>AUTOR DO LIVRO : </label></td>
<td><input name="subject" type="text" size="33" 
maxlength="1000"></td>
</tr>
<tr> 
<td><label>DICA LITERÁRIA : </label>
</td>
<td><textarea name="comentario" cols="33"
rows="7">
</textarea>
</td>
</tr>
<tr> 
</div>
<td>
<div class="col-lg-3 offset-lg-11">
<input name="submit" type="submit" 
value="Enviar" 
class="btn btn-primary btn-lg">
</div>
</td>
</tr>
</table>
</form>

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
