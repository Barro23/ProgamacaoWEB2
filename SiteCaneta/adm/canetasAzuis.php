<?php
    include_once("../dao/manipuladados.php");

    $musica =  $_POST["txtNome"];
    $letra =  $_POST["txtMus"];
    $duracao =  $_POST["txtTemp"];
    $link =  $_POST["txtLink"];


    echo "nome: ".$musica. "<br/>Letra: " .$letra. "<br/>Duração: ".$duracao. "<br/>Duração: ".$link;

    $manipula = new manipuladados();
    $manipula->setTable("tb_musicas");
    $manipula->setFields("musica, letra, duracao, link");
    $manipula->setDados("'$musica','$letra','$duracao','$link'");
    $manipula->insert();


    echo "<br/>".$manipula->getStatus();


?>