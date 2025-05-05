<?php
session_start();

$senha = $_POST["senha"];
$csenha = $_POST["csenha"];
$controle = 0;

foreach ($_POST as $key => $value) {
    if ($value == 0) {
        $controle++;
    }

}

if ($controle > 0) {

    if ($senha == $csenha and $senha !== "") {
        $_SESSION["Resposta"] = "<div class='alert alert-success' role='alert'>
         dados validados com sucesso que o grande lider esteja com você 
         </div>";
        header("location:exemplo.php");
    }else{
        $_SESSION["Resposta"] = "<div class='alert alert-danger' role='alert'>
         O lider desaprova sua estupidez o Valor da senha é nulo ou os campos não batem 
         </div>";
        header("location:exemplo.php");
    }
}else{
    $_SESSION["Resposta"] = "<div class='alert alert-danger' role='alert'>
    O lider despreza suas ações algum campo não foi preenchido corretamente
    </div>";
    header("location:exemplo.php");
}



?>




