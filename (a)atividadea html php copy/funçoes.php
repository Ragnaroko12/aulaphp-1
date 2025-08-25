<?php
if (isset($_GET['id']) and $_GET['tp'] == "excluir"){
    exclusão($_GET['id']);
}elseif (isset($_GET['id']) and $_GET['tp'] == "alterar"){
        alterar($_GET['id']);
    }

function init(){
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp1','root','');    
    return $pdo;
}

function consulta(){ 
    $pdo = init();
    $sql = $pdo->prepare("SELECT * FROM `usuarios`");
    $sql->execute(array());
    $dados = $sql->fetchALL(PDO::FETCH_ASSOC);
    return $dados;
}

function consultaid($id){ 
    $pdo = init();
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE id=?");
    $sql->execute(array($id));
    $dados = $sql->fetchALL(PDO::FETCH_ASSOC);
    return $dados;
}

function exclusão($id){
    $pdo = init();
    $sql = $pdo->prepare("DELETE FROM `usuarios` WHERE id=?");
    $sql->execute(array($id));
    header("location:exclusão.php");
}
function alterar($id){
    session_start();
    $_SESSION['id'] = $id;
    header('location:troca.php');
}

?>