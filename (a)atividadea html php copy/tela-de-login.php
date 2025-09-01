<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Mansão Pato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="bg-warning d-flex  align-items-center vh-100">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

  <div class="container text-center">
    <h1 class="mb-4 color">Login Mansão Pato</h1>

    <form action="validação.php" method="post" class="mx-auto" style="max-width: 400px;">
      <div class="mb-3">
        <input class="form-control" type="email" name="email" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input class="form-control" type="password" name="senha" placeholder="Senha" required>
      </div>
      <div>
        <input class="btn btn-primary w-100" type="submit" value="Enviar" >
      </div>
    </form>

    <?php
            if (isset($_SESSION['retorno'])) {
                $resposta = $_SESSION['retorno'];
                echo $resposta;
            }; 
    ?>
  </div>

</body>
</html>
