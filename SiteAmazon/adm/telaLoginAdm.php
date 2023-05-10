<?php

?>
<center>

    <p><img src="../img/amazonlogo2.png" width="170" style="color: black;"></p> 

     <p><h1>Fazer Login</h1></p>
     <form method="post" action="loginAdm.php" class="container text-center" width="30%">
          
          <div class="mb-3 row" width="30%">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
               <input type="text"  name="txtEmail" placeholder="email@gmail">
          </div>
          </div>
          <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
               <input type="password" class="form-control" id="inputPassword" name="senha">
          </div>

          <h5>Ao continuar, você concorda com as Condições de <p>Uso da Amazon. Por favor verifique </p> a Notificação de Privacidade, Notificação<p> de Cookies e a Notificação</p> de Anúncios Baseados em Interesse.</h5>

          <input type="submit" name="enviar" >
          </div>

     </form>
     <br/><br/>
     <a href=""> <button type="button" class="btn btn-secondary btn-lg">Candastre-se</button></a>

     <a href="../index.php"><h4>Volte para a pagina inicial</h4></a>
</center>


