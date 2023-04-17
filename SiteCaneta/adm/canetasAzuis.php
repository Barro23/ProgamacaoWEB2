<?php
    include_once("../dao/manipuladados.php");

    
    $acao =  $_POST["acao"];
    if ($acao == "Deletar"){
        $musica =  $_POST["musica"];
        $delete = new manipuladados();
        $delete->delete($musica);

        echo "apagado com sucesso!";

    }
    else if($acao == "Enviar"){
        $musica =  $_POST["musica"];
        $letra =  $_POST["txtMus"];
        $duracao =  $_POST["txtTemp"];
        $link =  $_POST["txtLink"];
        $enviar = new manipuladados();
        $enviar->setTable("tb_musica");
        $enviar->setFields("musica, letra, duracao, link");
        $enviar->setDados("'$musica','$letra','$duracao','$link'");
        $enviar->insert();

        echo "nome: ".$musica. "<br/>Letra: " .$letra. "<br/>Duração: ".$duracao. "<br/>Duração: ".$link;
        echo "<br/>".$enviar->getStatus();

    }else if($acao == "Atualizar"){
        $musica =  $_POST["musica"];
        $letra =  $_POST["txtMus"];
        $duracao =  $_POST["txtTemp"];
        $link =  $_POST["txtLink"];
        $id = $_POST["id"];
        $update = new manipuladados();
        $update->update($musica, $duracao, $letra, $link, $id);

        echo "nome: ".$musica. "<br/>Letra: " .$letra. "<br/>Duração: ".$duracao. "<br/>Duração: ".$link;
        echo "atualizado com sucesso!";

    }
    

?>