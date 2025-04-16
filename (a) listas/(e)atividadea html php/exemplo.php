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
<body class = "bg-dark">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>



    <h1>fixinha da associação Pato</h1>
    <form action="soma.php" method="post">
    <input class="form-control" type="text" name="nome" id="" placeholder="nome">
    <h3> endereço</h3>
    <input class="form-control" type="text" name="rua" id="" placeholder="Rua"><br>
    <input class="form-control" type="number" name="numero" id="" placeholder="Numero da casa"><br>
    <input class="form-control" type="text" name="bairro" id="" placeholder="Bairro"><br>
    <input class="form-control" type="text" name="cep" id="" placeholder="CEP"><br>
    <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade"><br>
    <input class="form-control" type="text" name="estado" id="" placeholder="Estado"><br>
    <br><br>
    <input class="form-control" type="email" name="email" id="" placeholder="Email"><br>
    <input class="form-control" type="number" name="cpf" id="" placeholder="CPF"><br>
    <input class="form-control" type="number" name="rg" id="" placeholder="RG"><br>
    <input class="form-control" type="date" name="nacimento" id="" placeholder="Data de nacimento"><br>
    <select class="form-select" name="civil" id="" placeholder="estado civil">
    <option value="solteiro">Solteiro</option>
    <option value="casado">Casado</option>
    <option value="compremetido">compormetido</option>
    <option value="viuva">viuvo(a)</option>
    </select><br>
    <select class="form-select" name="sexo" id="">
        <option value="Homem">Homem</option>
        <option value="mulher">mulher</option>
        <option value="omniman">omniman</option>
    </select><br>
    <input class="form-control" type="password" name="senha" id="" placeholder="insira a senha"><br>
    <input class="form-control" type="password" name="csenha" id="" placeholder="confirmar a senha"><br>
    <input class="btn btn-primary" type="submit" value="enviar">
    </form>

    <?php
        if ($_SESSION["Resposta"]) {
            echo $_SESSION["Resposta"]; 
        };

    ?>
</body>
</html>

