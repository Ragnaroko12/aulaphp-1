<?php
if (isset($_GET['id'])){
    exclusão($_GET['id']);
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
function exclusão($id){
    $pdo = init();
    $sql = $pdo->prepare("DELETE FROM `usuarios` WHERE id=?");
    $sql->execute(array($id));
    header("location:exclusão.php");
}

?>