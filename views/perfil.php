<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location: permissao.php");
}
?>
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <script src="js/perfil_usuario.js"></script>
</head>

<body class="profile-page" >
<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="telalogado.php">Bellatrix </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons">apps</i> Configurações
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="editar_perfil.php" class="dropdown-item">
                            <i class="material-icons">layers</i> Editar
                        </a>

                        <a href="excluir_perfil.php" class="dropdown-item">
                            <i class="material-icons">layers</i> Excluir conta
                        </a>

                        <a href="index.php" class="dropdown-item">
                            <i class="material-icons">content_paste</i> Sair
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="telalogado.php">
                        <i class="material-icons"></i> Site
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="page-header header-filter" data-parallax="true" style="background-image:url('img/fundoinicial.gif');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title"><?=$_SESSION["login"] . "<br />" . $_SESSION["email"];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="editar_perfil.php">
                                    
                                    Editar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="excluir_perfil.php" role="tab" >
                                    
                                    Excluir
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php" role="tab" >
                                    
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="row">

                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="works">

                </div>
                <div class="tab-pane text-center gallery" id="favorite">
                    <div class="row">

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<footer class="footer text-center ">
   
</footer>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>


</html>