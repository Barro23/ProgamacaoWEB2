<?php
    session_start();
    include_once("../controller/verurl.php");
    include_once("validarcookie.php");
    
    echo @$_SESSION["alerta"];
    $_SESSION["alerta"]="";
    
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



<header class="topo">
        <?php include("../includes/topoAdmin.php") ?>
</header>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <?php include("../includes/menuAdm.php")?>
    </nav>
    
    <section>
        <br/><br/>
        <center><h1>Adicione seus Produtos Aqui</h1></center>
        <br/>

        <div class=" container estiloform">
                <form method="post" class="form-floating" action="tratarProdutos.php" >
                    
                    <input type="text" name="descricao" class="form-control" id="floatingInputValue" placeholder="Descrição do Produto" >
                    <label for="floatingInputValue">Descrição do Produto:</label>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Quantidade do Produto:</label>
                        <input type="text" name="quantidade" class="form-control" id="formGroupExampleInput2" placeholder="Ex.4">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Valor do Produto</label>
                        <input type="text" name="valor" class="form-control" id="formGroupExampleInput2" placeholder="Ex.2.000">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Status</label>
                        <input type="text" name="status" class="form-control" id="formGroupExampleInput2" placeholder="Ex.1">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Link da Img do produto</label>
                        <input type="text" name="img" class="form-control" id="formGroupExampleInput2" placeholder="Ex.https://www.img">
                    </div>

                    <div class="col-12">
                        <input type="submit" class="btn btn-primary" name="acao" value="Enviar">
                        <input type="submit" class="btn btn-primary" name="acao" value="Deletar">
                    </div>

                </form>
         </div>

         
         
         <br/><br/><br/><br/><br/><br/><br/>
    </section>
    <br/>
   <center><h1>Algumas das Letras de Musica do Manuel Gomes</h1></center> 
    <br/><br>
 
        <?php
            include_once("../dao/manipuladados.php");
            $busca = new manipuladados();

            $busca->setTable("produto");
            $resultado = $busca->getAllDataTable();
            while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        ?>
        

            <div class="card container" style="width: 80rem;">
                <div class="card-body">
                    <form method="post" class="form-floating" action="tratarProdutos.php" >
                        <div class="card-img" style="width: 100%;" >
                            <img src="<?=$row['img'];?>"  style="width: 100%; height: 180px;">
                        </div>
                        <input type="text" hidden name="id" value="<?=$row['id'];?>">
                        <h5 class="card-title"><input type="text" name="descricao" value="<?=$row['descricao'];?>"></h5>
                        <p class="card-text"><input type="text" name="quantidade" value="<?=$row['quantidade'];?>"></p>
                        <p class="card-text"><input type="text" name="valor" value="<?=$row['valor'];?>"></p>
                        <p class="card-text"><input type="text" name="status" value="<?=$row['status'];?>"></p>
                        <p class="card-text"><input type="text" name="img" value="<?=$row['img'];?>"></p>

                        <input type="submit" class="btn btn-primary" name="acao" value="Deletar">
                        <input type="submit" class="btn btn-primary" name="acao" value="Atualizar">
                    </form>
                </div>
            </div>
        
        <?php
            }
        ?>

        


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
