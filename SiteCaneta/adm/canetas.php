<?php
    include_once("../controller/verurl.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Caneta Azul</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/canetacima.png">
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='../css/app.css'>
    <script src='../js/bootstrap.js'></script>
</head>
<body>
    <div class=" container estiloform">
        <form method="post" action="canetasAzuis.php">
            <p><input type="text" name="txtNome" placeholder="Digite o nome da muisica." ></p>
            <p><label>Musica:</label></p>
            <textarea name="txtMus" rows="8" cols="50"></textarea>
            <p><input type="text" name="txtTemp" placeholder="Tempo da muisica." ></p>
            <p><input type="submit" name="btnEnviar" value="Enviar para o BD"></p>

        </form>
    </div>
    
</body>
</html>
