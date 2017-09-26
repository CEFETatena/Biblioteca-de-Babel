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

<body class="index" id="page-top" background="assets/img/babelazul.png">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <a class="navbar-brand" href=""><img src="assets/img/exemplo3.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="welcome/livros">LIVROS</a>
            <a class="navbar-brand" href="welcome/dicas">DICAS</a>
            <a class="navbar-brand" href="welcome/textos">TEXTOS</a>
            <a class="navbar-brand" href="#about">SOBRE</a>

            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <?php
                        echo anchor(base_url("welcome/entrar"),"ENTRAR");
                      ?>
                    	<!--  <a class="nav-link" href="entrar">Entrar</a>-->
                    </li>
                    <li class="nav-item">
                      <?php
                        echo anchor(base_url("welcome/cadastrar"),"CADASTRAR");
                      ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">

            <div class="col-lg-6 intro-text" style="float:right; padding-top:10%">

                <span class="name">BIBLIOTECA DE BABEL</span>
                <img class="img-fluid" id="img2" src="{url}assets/img/estrela2.png" alt="">

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


    </section>



    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <!-- INí
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="{url}#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

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
    <!--Fim 1-->


    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>AS CRÔNICAS DE FOGO E GELO - GUERRA DOS TRONOS</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="{url}img/portfolio/guerradostronos.jpg" alt="">
                                <p>Livro muito bom, uma bela obra de George R R Martin</p>
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
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>AS CRÔNICAS DE FOGO E GELO - FÚRIA DOS REIS</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="{url}img/portfolio/furiadosreis.jpg" alt="">
                                <p>Livro muito bom, uma bela obra de George R R Martin</p>
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
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>AS CRÔNICAS DE FOGO E GELO - TORMENTA DAS ESPADAS</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="{url}img/portfolio/tormentadasespadas.jpg" alt="">
                                <p>Livro muito bom, uma bela obra de George R R Martin</p>
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
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>AS CRÔNICAS DE FOGO E GELO - DANÇA DOS DRAGÕES</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="{url}img/portfolio/dancadosdragoes.jpg" alt="">
                                <p>Livro muito bom, uma bela obra de George R R Martin</p>
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
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>AS CRÔNICAS DE FOGO E GELO - FESTIM DOS CORVOS</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="{url}img/portfolio/ofestimdoscorvos.jpg" alt="">
                                <p>Livro muito bom, uma bela obra de George R R Martin</p>
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