<?php 
session_start();

if(!isset($_SESSION['nome'])){
  header('location:cadastro.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<style>
  .amarelo{
    background-color: rgb( 222,157,13);
  }
</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

<nav class="navbar bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand"> Bem vindo <?php echo $_SESSION['nome'];?></a>
    <a class="" href="./DestruirSessão.php">
      <button class="btn amarelo">Lougot</button>
    </a>
  </div>
</nav>
 

<div class="container">

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
      <a href="Alteração.php   ">
      <button type="button" class="btn btn-danger">Alteração</button>
      </a> 
    </div>

    <div class="col-md-3 mt-6">
      <a href="exclusão.php">
      <button type="button" class="btn btn-warning">exclusão</button>
      </a>   
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mt-6">
      <a href="CadastrarProduto.php">
      <button type="button" class="btn btn-warning">Cadastrar Produto</button>
      </a>   
    </div>
  </div>
</div>



<div class="">
  <div class="fixed-bottom text-center border-top border-primary">
    @supremacia pato
  </div>  
</div>









</div> 
</body>
</html>