<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

<div class="container">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"> Bem vindo <?php echo $_SESSION['nome'];?></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="text-center">
  <div class="row">
    <div class="col-md-3 mt-6">
      <a href="Cadastro.php   ">
      <button type="button" class="btn btn-success">Cadastro</button>
      </a> 
    </div>

    <div class="col-md-3 mt-6">
      <a href="consulta.php">
      <button type="button" class="btn btn-primary">consulta</button>
      </a>   
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 mt-6">
      <a href="Cadastro.php   ">
      <button type="button" class="btn btn-danger">Alteração</button>
      </a> 
    </div>

    <div class="col-md-3 mt-6">
      <a href="consulta.php">
      <button type="button" class="btn btn-warning">exclusão</button>
      </a>   
    </div>
  </div>
</div>

<div class="bg-">
  <div class="fixed-bottom text-center">
    @supremacia pato
  </div>  
</div>









</div> 
</body>
</html>