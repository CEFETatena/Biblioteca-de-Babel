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
               	<?php echo anchor(base_url("homeAdm"),"VOLTAR", array("class" => "btn btn-mediun btn-primary")) ?>
             
                </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Grid Section -->
    <br>
    <section id="portfolio">
        <div class="container">
        		<br>
            <h2 class="text-center">USUÁRIOS</h2>
            <hr class="star-primary">
            <div class="box1">
           	 	<?php 
						echo form_open(base_url("homeAdm/buscarUsuario")) . 
								form_label('BUSCAR POR: ', 'txt_busca') .
								form_input('txt_busca') .
								form_close();	
						
						echo "<table>" .
										"<tr>" .
											"<th width = '20%'>NOME</th>" .
											"<th width = '20%'>SOBRENOME</th>" .
											"<th width = '20%'>NOME DE USUÁRIO</th>" .
											"<th width = '30%'>EMAIL</th>" .
											"<th width = '5%'>PERFIL</th>" .
											"<th width = '5%'>STATUS</th>" .											
										"</tr>";
										foreach($usuarios as $usuario){
							 						echo
														"<tr>" .										
							 								"<td>" . $usuario->nome . "</td>" .
							 								"<td>" . $usuario->sobrenome . "</td>" .
							 								"<td>" . $usuario->nomeDeUsuario . "</td>" .
							 								"<td>" . $usuario->email . "</td>" .
							 								"<td>" . $usuario->perfil . "</td>" .
							 								"<td>" . $usuario->status . "</td>"	.						 								
				   		 							"</tr>";
				   		 			}
				   		 "</table>";						
						           	 	
           	 	?>
           	 	
				</div>
     </div>  




    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/tether/tether.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../assets/js/jqBootstrapValidation.js"></script>
    <script src="../assets/js/contact_me.js"></script>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <!--<script src="../assets/js/script.js"></script>-->

    <!-- Custom scripts for this template -->
    <script src="../assets/js/freelancer.min.js"></script>

</body>

</html>