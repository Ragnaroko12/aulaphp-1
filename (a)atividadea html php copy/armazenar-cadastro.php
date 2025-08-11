<?php
session_start();

$senha = sha1($_POST["senha"]);
$csenha = sha1($_POST["csenha"]);
$controle = 0;

function cadastrarbanco() {
    //======================conexão com o banco de dados===============
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp1','root','');
    //===============================preparação dos dados============================================
    $sql = $pdo -> prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    //===============================execuxão e gravações de dados===================================
    $sql -> execute(array($_POST['nome'],
                          $_POST['rua'],
                          $_POST['numero'],
                          $_POST['bairro'],
                          $_POST['cep'],
                          $_POST['cidade'],
                          $_POST['estado'],
                          $_POST['email'],
                          $_POST['cpf'],
                          $_POST['rg'],
                          $_POST['nascimento'],
                          $_POST['civil'],
                          $_POST['sexo'],
                          sha1($_POST['senha']),
                          date("d-m-Y H:i:s"),
));

};
 


foreach ($_POST as $key => $value) {
    if (isset($value)) {
        $controle++;
    }

}

if ($controle > 0) {

    if ($senha == $csenha and $senha !== "") {
        $_SESSION["Resposta"] = "<div class='alert alert-success' role='alert'>
            dados cadastrados que o grande lider esteja com você 
            </div>";
            cadastrarbanco();
            header("location:tela-de-login.php");
    }else{
        $_SESSION["Resposta"] = "<div class='alert alert-danger' role='alert'>
         O lider desaprova sua estupidez o Valor da senha é nulo ou os campos não batem 
         </div>";
        header("location:Cadastro.php");
    }
}else{
    $_SESSION["Resposta"] = "<div class='alert alert-danger' role='alert'>
    O lider despreza suas ações algum campo não foi preenchido corretamente
    </div>";
    header("location:Cadastro.php");
}






?>




