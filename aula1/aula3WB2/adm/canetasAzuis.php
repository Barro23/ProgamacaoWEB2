<?php
    include_once("../dao/manipuladados.php");

    $musica =  $_POST["txtNome"];
    $letra =  $_POST["txtMus"];
    $duracao =  $_POST["txtTemp"];


    echo "nome: ".$musica. "<br/>Letra: " .$letra. "<br/>Duração: ".$duracao;

    $manipula = new manipuladados();
    $manipula->setTable("tb_musicas");
    $manipula->setFields("musica, letra, duracao");
    $manipula->setDados("'$musica','$letra','$duracao'");
    $manipula->insert();

    echo $manipula->getStatus();


?>