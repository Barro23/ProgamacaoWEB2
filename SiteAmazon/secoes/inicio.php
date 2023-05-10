<?php

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Amazon Administradores</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.icon-icons.com/icons2/1195/PNG/512/1490889698-amazon_82521.png">
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='../css/app.css'>
    <script src='../js/bootstrap.js'></script>
</head>
<body>


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"><center>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="https://m.media-amazon.com/images/I/71IhMdsCniL._SX3000_.jpg" class="" style=" width: 85%; -webkit-mask-image: linear-gradient(to top, transparent 20%, white 70%);">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://m.media-amazon.com/images/I/71EFWvNGjeL._SX3000_.jpg" class=""  style=" width: 85%; -webkit-mask-image: linear-gradient(to top, transparent 20%, white 70%);">
    </div>
    <div class="carousel-item">
      <img src="https://m.media-amazon.com/images/I/71+imcmNzFL._SX3000_.jpg" class=""  style=" width: 85%; -webkit-mask-image: linear-gradient(to top, transparent 20%, white 70%);">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</center>
</div>

<div class="espacoCardtres container-fluid">
        <div class="personalizarCard row row-cols-1">
            <div class="espacoCarddois col col-6 card mb-3 " style="max-width: 40%;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/product/87709/a22a899f-17b8-49ab-b621-189d41b25ef9-my-way-giorgio-armani-eau-de-parfum-perfume-feminino-90ml.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Oferta do dias das mães</h5>
                        <p class="card-text">Dia das Mães: presentes por categoria</p>
                        <p class="card-text"><small class="text-body-secondary"><a href="">veja os produtos</a></small></p>
                    </div>
                    </div>
                </div>
            </div>

            <div class="espacoCarddois col card mb-3" style="max-width: 40%;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOllWAR_Sk96lKtzyr6yzhW9RuGoijqEkhv0sfJfym2KAWmce5damBo8y7e1Ra0Y8YF9w&usqp=CAU" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Curta suas músicas favoritas</h5>
                        <p class="card-text">baixe o amazon music e aproveite!</p>
                        <p class="card-text"><small class="text-body-secondary"><a href="">veja mais sobre..</a></small></p>
                    </div>
                    </div>
                </div>
            </div>

        </div>
 </div>
   

    <div class="espacoCard container-fluid">
        <div class="row row-cols-1">

 
        <?php
            include_once("dao/manipuladados.php");
            $busca = new manipuladados();

            $busca->setTable("produto");
            $resultado = $busca->getAllDataTable();
            while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        ?>
        

            <div class="col card" style="width: 25rem; margin-left: 15px;">
                <div class="card-img" style="width: 100%; height: 370px;" >
                    <img src="<?=$row['img'];?>"  style="object-fit: contain; width: 100%; height: 100%">
                </div>
                <div class="card-body">
                    <p class="card-text">Descrição: <?=$row['descricao'];?></p>
                    <p class="card-text">Preço: <?=$row['valor'];?>,00 R$</p>
                    <p class="card-text">qtn: <?=$row['quantidade'];?></p>
                    <form action="">
                        <input type="submit" class="btn btn-primary" name="vender" value="Comprar">
                    </form>
                </div>
            </div>
        
        <?php
            }
        ?>
        </div>
    </div>

