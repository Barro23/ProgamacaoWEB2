

<br/>
   <center><h1>Musicas de maior Sucesso!!!</h1></center> 
<br/>

<article class="container">

    <div class="musicas">
        <iframe width="426" height="250" src="https://www.youtube.com/embed/oxxJRZIZthg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="426" height="250" src="https://www.youtube.com/embed/FbDplUUW8SQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="426" height="250" src="https://www.youtube.com/embed/xE5TaJJAyU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>    

    <div class="musicas">
        <iframe width="426" height="250" src="https://www.youtube.com/embed/Tw_IGPK4S_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="426" height="250" src="https://www.youtube.com/embed/_KaA8W_Hov8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="426" height="250" src="https://www.youtube.com/embed/2P_esm8cNgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>    

</article>

<br/>
   <center><h1>Algumas das Letras de Musica do Manuel Gomes</h1></center> 
<br/><br>



<?php
    include_once("dao/manipuladados.php");
    $busca = new manipuladados();

    $busca->setTable("tb_musica");
    $resultado = $busca->getAllDataTable();
    while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
?>

<div class="container card" style="width: 80rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$row['musica'];?></h5>
    <p class="card-text"><?=$row['letra'];?></p>
    <p class="card-text"><?=$row['duracao'];?></p>
    <a href="<?=$row['link'];?>" class="btn btn-primary">Link Muisica</a>
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

    

    <div class=" container estiloform">
        <form method="post" class="form-floating" action="adm/canetasAzuis.php" >
            
            <input type="text" name="txtNome" class="form-control" id="floatingInputValue" placeholder="Nome da Musica" >
            <label for="floatingInputValue">Nome da Musica</label>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Escreva a letra da Musica</label>
                <input type="text" name="txtMus" class="form-control" id="formGroupExampleInput2" placeholder="Ex.Olha se vc não me ama..">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Tempo da Musica</label>
                <input type="text" name="txtTemp" class="form-control" id="formGroupExampleInput2" placeholder="Ex.2 min..">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Link da Musica</label>
                <input type="text" name="txtLink" class="form-control" id="formGroupExampleInput2" placeholder="Ex.https://www.youtube.com/watch?v=1OA6J8aTGuo">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


</div>

    

