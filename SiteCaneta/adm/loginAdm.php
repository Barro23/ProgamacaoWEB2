<?php

    include_once("../dao/manipuladados.php");
    session_start();

    $manipula = new manipuladados();

    $login = $_POST["txtNomeAdm"];
    $senha = $_POST["senha"];
    $manipula->setTable("tb_usuario");
    $linhas = $manipula->validarLogin($login,$senha);
    echo $linhas;

    if($linhas == 0){
        echo '<script>alert("Usuario ou senha do adm nao cadastrado ou incorreto(s)");</script>';
        echo "<script>location ='telaLoginAdm.php';</script>";
    }else{
        $_SESSION["usuario"] = $login;
        setcookie("nome_usuario", $login);
        setcookie("senha_usuario", $senha);
        header("Location: principal.php");
    }

?>