<?php   

?>
<nav class="colorTopo navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?secoes=inicio"><img src="../img/amazonlogo.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="topoBotoes">
          <a class="nav-link" href="#">locate</a>
        </div>
        <div class="topoBotoes">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
        <div class="pesquisaPersonalizar">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="topoBotoes btn-group me-2"  >
            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                echo "<center><h7>Bem vindo  ". $_SESSION["usuario"]. "!</h3></center>";
              ?>
            </a>
          <ul class="dropdown-menu">
            <li><a class="nav-link active" href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="topoBotoes">
          <a class="nav-link" href="#">
            veja o estoque
          </a>
        </div>
        <div class="topoBotoes">
          <a class="nav-link" href="#"><img src="../img/carrinho.png" width="30">carrinho</a>
        </div>
        
    </div>
  </div>
</nav>