<?php
session_start();

if(!isset($_SESSION['nome'])){
  header('location:cadastro.php');
}
include_once("funçoes.php");

$dados = consulta();

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

<nav class="navbar bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand"> Bem vindo <?php echo $_SESSION['nome'];?></a>
    <a href="./adm.php">
      <button class="btn btn-primary">Voltar</button>
    </a>
  </div>
</nav>


<div class="container">
<div class="mt-5">
<table class="table table-hover">
  <tr>
    <td>id</td>
    <td>Nome</td>
    <td>Cpf</td>
    <td>Sexo</td>
    <td>Email</td>
    <td></td>
  </tr>
<?php
foreach ($dados as $key => $value) {

  echo"<tr>";
  echo   "<td>".$dados[$key]["id"]."</td>";
  echo   "<td>".$dados[$key]["nome"]."</td>";
  echo   "<td>".$dados[$key]["cpf"]."</td>";
  echo   "<td>".$dados[$key]["sexo"]."</td>";
  echo   "<td>".$dados[$key]["email"]."</td>";
  echo   "<td> <a class='link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover' href='funçoes.php?id=".$dados[$key]['id']."&tp=alterar'>alterar</a> </td>";
  echo"</tr>";
} 
?>

</table>
</div>
</div>
<?php
echo $_SESSION['aviso']
?>



<div class="">
  <div class="fixed-bottom text-center border-top border-primary">
    @supremacia pato
  </div>  
</div>

</div> 
</body>
</html>