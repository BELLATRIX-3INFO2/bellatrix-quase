<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
          <link href="css/style.css" rel="stylesheet">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="cadastro.css">

        <title>Bellatrix</title>
    </head>
    <style>

        body{
            background-image: url("img/fundoinicial.gif");
        }
    </style>
    <body>

         <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">Bellatrix</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Login</a></li>
        </ul>
      </nav><!-- #nav
      -menu-container -->

    </div>
             <?php if (isset($_GET["msg"])) : ?>
                 <div class="alert alert-danger" role="alert">
                 <strong><?=$_GET["msg"];?></strong>
             <?php endif; ?>
             </div>
  </header><!-- #header -->
        <div class="container" style="margin-top: -50px;">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h2 class="title">Cadastro</h2>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center" style="height: 455px;">
                    <form class="form-horizontal" action="../controlador/usuario.php?acao=inserir"  method="post">

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Nome</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="nome" placeholder="Insira seu nome"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Usuário</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="login" placeholder="Insira seu nome de usuário"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Senha</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="senha" placeholder="Insira sua senha"/>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="Insira seu Email"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button class="btn btn-primary btn-lg btn-block login-button" type="submit" href="../controlador/usuario.php?acao=inserir" name="gravar">Cadastrar</button>
                        </div>
                        <div class="login-register">
                            <a class="cancell" href="index.php" style="color:blue">Cancelar </a>
                         </div>
                    </form>
                </div>
            </div>
        </div>
       
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
   
    </body>
</html>