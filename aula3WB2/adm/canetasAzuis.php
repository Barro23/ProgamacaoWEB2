<?php
    include_once("../dao/manipuladados.php");

    $nomemusica =  $_POST["txtNome"];
    $letra =  $_POST["txtMus"];
    $duracao =  $_POST["txtTemp"];
    $link =  $_POST["txtlink"];
    $img =  $_POST["txtUrl"];

    echo "nome".$nomemusica. "<br/>Letra" .$letra. "<br/>Duração".$duracao. "<br/>link".$link."<img".$img;

    $manipula = new manipuladados();
    $manipula->setTable("tb_musicas");
    $manipula->setFields("musica, letra, duracao, img, link");
    $manipula->setDados("'$nomemusica','$letra','$duracao', '$img','$link");
    $manipula->insert();

    echo $manipula->getStatus();


?>