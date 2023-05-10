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
    
    <footer  class="container-fluid py-5 d-lg-block">
        <?php include("includes/rodape.php")?>
    </footer>

    
</body>
</html>