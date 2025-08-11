<?php
function init(){
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp1','root','');    
    return $pdo;
}

function consulta(){
    
    $pdo = init();

    $sql = $pdo -> prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");

    $sql->execute(array($_POST['email'], sha1($_POST['senha'])));    
}

    $dados = $sql ->fetchALL(PDO::FETCH_ASSOC);
?>