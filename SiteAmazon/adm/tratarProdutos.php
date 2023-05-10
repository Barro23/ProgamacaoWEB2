<?php
    include_once("../dao/manipuladados.php");
    session_start();

    
    $acao =  $_POST["acao"];
    if ($acao == "Deletar"){
        $id =  $_POST["id"];
        $delete = new manipuladados();
        $delete->delete($id);

        $_SESSION["alerta"] = "<script>alert('Apagado com Sucesso!')</script>";

        header('location: http://localhost/ProgamacaoWeb2/SiteAmazon/adm/principal.php');
        exit();

    }
    else if($acao == "Enviar"){
        $descricao =  $_POST["descricao"];
        $quantidade =  $_POST["quantidade"];
        $valor =  $_POST["valor"];
        $status =  $_POST["status"];
        $img =  $_POST["img"];
        $enviar = new manipuladados();
        $enviar->setTable("produto");
        $enviar->setFields("descricao, quantidade, valor, status, img");
        $enviar->setDados("'$descricao','$quantidade','$valor','$status', '$img'");
        $enviar->insert();
        $_SESSION["alerta"] = "<script>alert('Enviado com Sucesso!')</script>";

        header('location: http://localhost/ProgamacaoWeb2/SiteAmazon/adm/principal.php');
        exit();

    }else if($acao == "Atualizar"){
        $descricao =  $_POST["descricao"];
        $quantidade =  $_POST["quantidade"];
        $valor =  $_POST["valor"];
        $status =  $_POST["status"];
        $img = $_POST["img"];
        $id = $_POST["id"];
        $update = new manipuladados();
        $update->update($descricao, $quantidade, $valor, $status, $img, $id);

        $_SESSION["alerta"] = "<script>alert('Atualizado com Sucesso!')</script>";

        header('location: http://localhost/ProgamacaoWeb2/SiteAmazon/adm/principal.php');
        exit();

    }
    

?>