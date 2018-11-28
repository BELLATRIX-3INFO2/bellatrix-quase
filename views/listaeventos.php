<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location: permissao.php");
}
?>
<!DOCTYPE html>
<html>
<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/calendario.css" rel="stylesheet">
    <script src="js/calendario.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/calendario.css">
    
    <!------ Include the above in your HEAD tag ---------->


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    

</head>

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
                <li><a href="#team">Sobre</a></li>
                <li class="menu-has-children"><a href="">Categorias</a>
                    <ul>
                        <li><a href="cometaHalley.php">Cometas</a></li>
                            <li><a href="satelite.php">Satélites</a></li>
                            <li><a href="sol.php">Estrelas</a></li>
                            <li><a href="galaxiaAndro.php">Galáxias</a></li>
                            <li><a href="nebulosa.php">Nebulosas</a></li>
                            <li><a href="historia.php">História</a></li>
                            <li><a href="planetaTerra.php">Planetas</a></li>
                            <li><a href="sistema.php">Sistema Solar</a></li>
                    </ul>
                </li>
                <li><a href="../controlador/usuario.php?acao=logout">Logout</a></li>
                <li><a href="perfil.php">Perfil</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->
<body>


<div class="container">
    <div class="row">

        <section class="content">
            <h1>Table Filter</h1>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
                                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                                <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                            </div>
                        </div>
                        <div class="table-container">
                            <table class="table table-filter">
                                <tbody>
                                    <tr data-status="pagado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pagado">(Pagado)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pendiente">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox3">
                                                <label for="checkbox3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pendiente">(Pendiente)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="cancelado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox2">
                                                <label for="checkbox2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right cancelado">(Cancelado)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pagado" class="selected">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox4" checked>
                                                <label for="checkbox4"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star star-checked">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pagado">(Pagado)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pendiente">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pendiente">(Pendiente)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="content-footer">
                    <p>
                        Page © - 2016 <br>
                        Powered By <a href="https://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a>
                    </p>
                </div>
            </div>
        </section>
        
    </div>
</div>
</body>
</html>
