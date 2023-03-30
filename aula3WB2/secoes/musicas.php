

<br/>
   <center><h1>Musicas de maior Sucesso!!!</h1></center> 
<br/>

<article class="container">

    <div class="musicas">
        <iframe width="400" height="250" src="https://www.youtube.com/embed/oxxJRZIZthg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="400" height="250" src="https://www.youtube.com/embed/FbDplUUW8SQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="400" height="250" src="https://www.youtube.com/embed/xE5TaJJAyU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>    

    <div class="musicas">
        <iframe width="400" height="250" src="https://www.youtube.com/embed/Tw_IGPK4S_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="400" height="250" src="https://www.youtube.com/embed/_KaA8W_Hov8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="400" height="250" src="https://www.youtube.com/embed/2P_esm8cNgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>    

</article>

<br/>
   <center><h1>Algumas das Lertras de Musica do Manuel Gomes</h1></center> 
<br/><br>



<?php
    include_once("dao/manipuladados.php");
    $busca = new manipuladados();

    $busca->setTable("tb_musicas");
    $resultado = $busca->getAllDataTable();
    while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
?>

<div class="container card" style="width: 50rem;">
  <img src="<?=$row[img];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$row['musica'];?></h5>
    <p class="card-text"><?=$row['letra'];?>.</p>
    <p class="card-text"><?=$row['duracao'];?>.</p>
    <a href="<?=$row[link];?>" class="btn btn-primary">Link MUisica</a>
  </div>
</div>


<?php
    }
?>

<div class="container">
    <br/>
    <br/>
    <center><h1>Ajude a Colocarmos as 21 mil musicas do Manuel Gomes</h1></center> 
    <br/>

    <form method="post" action="musicas.php" enctype="multipart/form-data">

                <p>
                    <label>Escreva aqui as musicas do Manuel:</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Ex. Se você não me ama..." aria-label=".form-control-lg example">
                </p>

                <div>
                    <label for="formFileLg" class="form-label">Envie um Arquivo das Musicas do Manuel:</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

    </form>
</div>

    

