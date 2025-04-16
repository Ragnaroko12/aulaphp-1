<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cadastro simples</h1>

    <form action="bd.php" method="post">
        <input type="text" name="nome" id="" placeholder="insira o nome"><br>
        <input type="email" name="email" id="" placeholder="insira seu email"><br>
        <input type="number" name="idade" id="" placeholder="insira sua idade"><br>
        <input type="submit" value="enviar">
    </form>
<?php


if($_SESSION["Resposta"] != ""){
    $respostas = explode("\n",$_SESSION["Resposta"]);
    foreach ($respostas as $resposta) {
        if (trim($resposta) !== "") {
            echo "<p>" . htmlspecialchars($resposta) . "</p>";
        }
       
    }
}
?>

</body>
</html>

