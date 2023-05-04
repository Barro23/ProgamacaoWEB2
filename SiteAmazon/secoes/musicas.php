

<br/>
   <center><h1>Musicas de maior Sucesso!!!</h1></center> 
<br/>

<article class="container">

       

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

<div class="card container" style="width: 80rem;">
    <div class="card-body">
        <form method="post" class="form-floating" action="canetasAzuis.php" >
            <div class="card-img" style="width: 100%;" >
                <img src="<?=$row['img'];?>"  style="width: 100%; height: 180px;">
            </div>
            <input type="text" hidden name="id" value="<?=$row['id'];?>">
            <h5 class="card-title"><input type="text" name="descricao" value="<?=$row['descricao'];?>"></h5>
            <p class="card-text"><input type="text" name="quantidade" value="<?=$row['quantidade'];?>"></p>
            <p class="card-text"><input type="text" name="valor" value="<?=$row['valor'];?>"></p>
            <input type="text" name="status" value="<?=$row['status'];?>">
            <input type="submit" class="btn btn-primary" name="acao" value="Deletar">
            <input type="submit" class="btn btn-primary" name="acao" value="Atualizar">
        </form>
    </div>
</div>
        


<?php
    }
?>


    

