<?php   
session_start();

if(!empty($_GET['id'])){
    if (isset($_GET['id']) and $_GET['tp'] == "excluir"){
        exclusão($_GET['id']);
    }elseif (isset($_GET['id']) and $_GET['tp'] == "alterar"){
            alterar($_GET['id']);
    }elseif(!empty($_SESSION['id']) and $_GET['tp'] == "concluir"){
        concluirAlteração($_SESSION['id'],$_POST);
    }    
  echo "1";  
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
    $_SESSION['id'] = $id;
    header('location:troca.php');
}

function concluirAlteração($id,$dados){
    $pdo = init();
     $sql = $pdo->prepare("UPDATE `usuarios` SET
                                            nome=?,
                                            rua=?,
                                            numero=?,
                                            bairro=?,
                                            cep=?,
                                            cidade=?,
                                            estado=?,
                                            email=?,
                                            cpf=?,
                                            rg=?,
                                            nascimento=?,
                                            civil=?,
                                            sexo=?
                                            WHERE id=?");




$sql->execute(array($dados['nome'],
                    $dados['rua'],
                    $dados['numero'],
                    $dados['bairro'],
                    $dados['cep'],
                    $dados['cidade'],
                    $dados['estado'],
                    $dados['email'],
                    $dados['cpf'],
                    $dados['rg'],
                    $dados['nascimento'],
                    $dados['civil'],
                    $dados['sexo'],
                    $id
));

$_SESSION['id'] = null;
$_SESSION['aviso'] = "<div class='alert alert-success' role='alert'>
    Dados alterados com sucesso
    </div>";

    header('location: Alteração.php');

}
?>