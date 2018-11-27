<?php

    session_start();
    require_once '../modelos/CrudConteudo.php';

    if (isset($_GET['acao'])){
    $acao = $_GET['acao'];

        }else{

        $acao = 'index';
    }
    switch ($acao){

        case 'index':

        $crud = new CrudConteudo();
        $conteudos = $crud->getConteudos();

//        include '../views/usuarios/index.php';

        break;

        case 'inserir':
        if (!isset($_POST['gravar'])){ // se ainda nao tiver preenchido o form
          //include '../views/telalogado.php';

        }else{

            // depois de preencher o formulario

            $titulo = $_POST['titulo'];
            $texto_post= $_POST['texto_post'];

            $novoConteudo = new Conteudo($titulo, $texto_post);
            $crud = new CrudConteudo();
            $crud->insertConteudo($novoConteudo);

            header('Location: ../views/index.php');
        }

        break;

            /*if (!isset($_POST['gravar'])){ // se ainda nao tiver preenchido o form
                include '../views/cadastro.php';
            }else{

                // depois de preencher o formulario
                //var_dump($_POST);

                $nome = $_POST['nome'];
                $login= $_POST['login'];
                $senha= $_POST['senha'];
                $email= $_POST['email'];

                $novoUsuario = new Usuario($nome,$login,$senha,$email);
                $crud = new CrudUsuarios();
                $crud->insertUsuario($novoUsuario);

                header('Location: ../views/telalogado.php');
            }
            break;*/

        case 'editar':

            $titulo = $_POST['titulo'];
            $descricao= $_POST['descricao'];
            $texto_post= $_POST['texto_post'];
            $crud = new CrudConteudo();
            $atualizar = $crud->updateConteudo();

            // header('Location: perfil.php');

            break;

        case 'excluir':
        $crud = new CrudConteudo();
        $apagar = $crud->deleteConteudo();

        // header('Location: ../views/usuarios/cadastrado.php');
        break;

}
//        FAZER O DELETE E O UPDATE DESSE E DO USUARIO.PHP; FAZER A TELA DE CADASTRO PARA O CONTEUDO E VALIDAÇÃO DE ELE PODER FAZER O CADASTRO PARA O CONTEUDO
