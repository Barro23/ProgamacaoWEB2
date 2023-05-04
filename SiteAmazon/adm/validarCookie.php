<?php
    include_once("../dao/manipuladados.php");
    $manipula = new manipuladados();

    if(IsSet($_COOKIE["email_usuario"]))
        $email_usuario = $_COOKIE["email_usuario"];

    if(IsSet($_COOKIE["senha_usuario"]))
        $senha_usuario = $_COOKIE["senha_usuario"];

    if(!(empty($email_usuario) or empty($senha_usuario))){
       
        $manipula->setTable('usuario');
        $linhas = $manipula->validarLogin($email_usuario, $senha_usuario);


        if($linhas == 0)
        {
            setcookie("email_usuario");
            setcookie("senha_usuario");
            header("location: telaLoginAdm.php");
            exit();
        }
    }
    else{
        header("location: telaLoginAdm.php");
        exit();
    }
?>