<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location: permissao.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bellatrix</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="blog.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <!-- =======================================================
      Theme Name: Reveal
      Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body id="body">

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="telalogado.php" class="scrollto">Bellatrix</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu"><a href="telalogado.php">Inicio</a></li>
                <li><a href="listaeventos.php">Eventos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="menu-has-children"><a href="">Categorias</a>
                    <ul>
                        <li><a href="cometa.php">Cometas</a></li>
                        <li><a href="satelite.php">Satélites</a></li>
                        <li><a href="estrela.php">Estrelas</a></li>
                        <li><a href="galaxia.php">Galáxias</a></li>
                        <li><a href="nebulosa.php">Nebulosas</a></li>
                        <li><a href="historia.php">História</a></li>
                        <li><a href="planetas.php">Planetas</a></li>
                        <li><a href="sistema.php">Sistema Solar</a></li>
                    </ul>
                </li>
                <li><a href="../controlador/usuario.php?acao=logout">Logout</a></li>
                <li><a href="perfil.php">Perfil</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->


<section id="services" >



    <div class="container">
        <div class="section-header">

            <h3>Notícias</h3>

        </div>
        <div class="col-xl-3 col-lg-1 col-md-3  project wow animated animated4 fadeInLeft">
            <div class="project-hover">
                <h2>Satélite Elisa</h2>

                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
                <a href="post.php">Ver mais</a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft ">
            <div class="project-hover">
                <h2>Ônibus pra Marte</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-3 col-sm-3 project project-3 wow animated animated2 fadeInLeft">
            <div class="project-hover">
                <h2>Nova Galáxia Descoberta</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated fadeInLeft">
            <div class="project-hover">
                <h2>Foguete Nirvana</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="container">

        <br>
        <div class="section-header">

            <h3>Outras notícias</h3>
            <a href="listaeventos.php"></a>
        </div>

        <div class="row" style="background-color: white;">

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-rocket"></i></div>
                    <h4 class="title"><a href="">Sonda Espcial BLACK-505</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                    <div class="icon"><i class="fa fa-rocket"></i></div>
                    <h4 class="title"><a href="">Cometa Medusa</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-rocket"></i></div>
                    <h4 class="title"><a href="">NASA e seus novos integrantes.</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-rocket"></i></div>
                    <h4 class="title"><a href="">Campeonato anual de foguetes</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- #services -->


<!--==========================
  Footer
============================-->
<br> <br>
<footer class="page-footer font-small teal pt-4" style="background-color:floralwhite; font-family: sans-serif; color: black;">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold" style="color: lightseagreen;">Objetivo do Projeto</h5>
                <p>O objetivo desse projeto é trazer de forma dinâmica o conteúdo de astronomia para que não se torne algo monótono. Notíciais sempre atualizadas também estão na lista de como deixar o site atrativo. </p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold" style="color:lightseagreen">Por que Bellatrix?</h5>
                <p>Bellatrix é a terceira estrela mais brilhante da constelação de Orion e a vigésima sétima mais brilhante do céu noturno. A escolha desse nome deu-se porque o grupo gosta muito da cor azul e também porque uma estrela é algo fenomenal.</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Instituto Federal Catarinense - Campus Araquari.
    </div>
    <!-- Copyright -->

</footer>


</body>
</html>
