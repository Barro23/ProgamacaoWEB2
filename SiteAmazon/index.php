<?php
    include_once("controller/verurl.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Amazon</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.icon-icons.com/icons2/1195/PNG/512/1490889698-amazon_82521.png">
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/app.css'>
    <script src='js/bootstrap.js'></script>
</head>
<body>
    <header class="topo">
        <?php include("includes/topo.php") ?>
    </header>
    
    <nav class="colorMenu navbar navbar-expand-lg bg-body-tertiary">
        <?php include("includes/menu.php")?>
    </nav>
    
    <section>
        <?php
            $red = new verurl();
            $red->trocarUrl(@$_GET['secoes']);
        ?>
    </section>
    <br/>
    <footer  class="colorRodape navbar navbar-expand-lg bg-body-tertiary">
        <?php include("includes/rodape.php")?>
    </footer>

    <footer  class="colorTopo navbar navbar-expand-lg bg-body-tertiary">
        <?php include("includes/rodapedois.php")?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</body>
</html>