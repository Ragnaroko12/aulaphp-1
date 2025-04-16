<?php
session_start();


$texto = htmlspecialchars($_POST["texto"]);


file_put_contents("lista.txt", $texto . "\n", FILE_APPEND);


$_SESSION["exibir"] = file_get_contents("lista.txt");


header("location: index.php");
exit();
?>