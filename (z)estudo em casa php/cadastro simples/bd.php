<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];

if (empty($nome) || empty($email) || empty($idade)) {
    $_SESSION["Resposta"] = "um dos campos não está preenchido";
} else {
    file_put_contents("Resposta.txt", $nome . "\n" . $email . "\n" . $idade . "\n", FILE_APPEND);
    $_SESSION["Resposta"] = file_get_contents("Resposta.txt");
}
  header("location: index.php");
?>