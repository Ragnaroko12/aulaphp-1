<?php
session_start();

print_r($_POST);

function cadastrarbanco() {
    //======================conexão com o banco de dados===============
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp1','root','');
    //===============================preparação dos dados============================================
    $sql = $pdo -> prepare("INSERT INTO `cadastro produto` VALUES (null,?,?,?,?,?,?,?,?,?,?,?)");
    //===============================execuxão e gravações de dados===================================
    $sql -> execute(array($_POST['NomeP'],
                          $_POST['Cor'],
                          $_POST['Material'],
                          $_POST['Peso'],
                          $_POST['ValorC'],
                          $_POST['ValorV'],
                          $_POST['DataC'],
                          $_POST['Fornecedor'],
                          $_POST['CidadeO'],
                          $_POST['Comentario'],
                          date("d-m-Y H:i:s"),
));
};

cadastrarbanco();
$_SESSION['Dados'] = "Dados cadastrados";
header("location:CadastrarProduto.php");
?>
