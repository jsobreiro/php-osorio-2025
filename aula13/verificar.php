<?php require_once 'funcoes.php';

    // se tentarmos acessar esta página via GET
    if (form_nao_enviado()) {
        // redireciona para a 'index' enviando o codigo de erro 0
        header('location:index.php?code=0');
    
    } else if (form_em_branco()) {// se houver campos em branco no form
        // redireciona para a 'index' enviando o codigo de erro 2
        header('location:index.php?code=2');
    } else {

        $usuario   = $_POST['usuario'];
        $senha     = $_POST['senha'];

        $login_usuario = "admin";
        $login_senha   = "lalala123";

        // Se usuário ou senha forem inválidos
        if ($usuario !== $login_usuario || $senha !== $login_senha) {
            // redireciona para index.php enviando um codigo de erro via GET
            header('location:index.php?code=1');
        } else {

            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha']   = $senha;

            header('location:home.php');
        }
    }

    
?>