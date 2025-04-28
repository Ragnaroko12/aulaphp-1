<?php
session_start();

$senha = $_POST["senha"];
$csenha = $_POST["csenha"];

if ($_POST !== "") {

    if ($senha == $csenha and $senha !== "") {
        $_SESSION["Resposta"] = "dados validados";
        header("location:exemplo.php");
    }else{
        $_SESSION["Resposta"] = "O Valor da senha é nulo ou os campos não batem";
        header("location:exemplo.php");
    }
}else{
    $_SESSION["Resposta"] = "algum valor incompleto";
    header("location:exemplo.php");
}


?>




