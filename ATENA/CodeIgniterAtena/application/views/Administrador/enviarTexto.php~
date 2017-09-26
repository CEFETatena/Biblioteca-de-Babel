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
        		<a class="navbar-brand" href="{url}homeAdm"><img src="{url}assets/img/logoadm.png" width="60px" height="60px"></a>
				<h3 class="name">ADMINISTRAÇÃO</h3>        		
            <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">
                	
                   <li><?php echo anchor(base_url("homeAdm"),"VOLTAR", array("class" => "btn btn-mediun btn-primary")) ?></li>
             
                </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Grid Section -->
    <br>
    <section id="portfolio">
    <br>
        <div class="container">
            <h2 class="text-center">PUBLICAR TEXTO</h2>
            <hr class="star-primary">
            
            <hr>
				<div class="col-lg-6 offset-lg-3">
           		<form name="nomedoform" action="publicarTexto" method="POST" >
					<table>
					<tr> 
						<td><label><b>TÍTULO DO TEXTO :</b> </label></td>
						<br>
						<td><input name="txtTitulo" type="text" size="33" maxlength="1000"></td>
					</tr>
					<tr> 
						<td><label><b>AUTOR DO TEXTO :</b> </label></td>
						<td><input name="txtAutor" type="text" size="33" maxlength="1000"></td>
					</tr>
					<tr> 
						<td><label><b>TEXTO :</b> </label>
						</td>
						<td><textarea name="txtTexto" cols="33" rows="7"></textarea>
						</td>
					</tr>
					<tr> 
				</div>
							<td>
								<div class="col-lg-3 offset-lg-11">
									<input name="submit" type="submit" value="Publicar" class="btn btn-primary btn-lg">
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
