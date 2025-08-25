<?php
session_start();

include_once('funçoes.php');
$dados = consultaid($_SESSION['id']);
print_r($dados);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class = "bg-warning bg-gradient">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <div class="container ">
    <nav class="navbar bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand"> Bem vindo <?php echo $_SESSION['nome'];?></a>
        <a href="./adm.php">
        <button class="btn btn-primary">Voltar</button>
        </a>
    </div>
    </nav>
        <h1>fixinha da associação Pato</h1>
        <form action="armazenar-cadastro.php" method="post" class="row">
            <!-- linha 1 -->
            <div class="row">
                <div class="col-mb-12 mt-2">
                    <input class="form-control" type="text" name="nome" id="" value="<?php echo $dados[0]['nome'] ?>" placeholder="nome">                    
                </div>

            </div>

            <h3> endereço</h3>
            <!-- linha 2 -->
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="rua" id="" value="<?php echo $dados[0]['rua'] ?>" placeholder="Rua">
                    
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="number" name="numero" id="" value="<?php echo $dados[0]['numero'] ?>" placeholder="Numero da casa">
                </div>

            </div>
            <!-- linha 3 -->       
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="bairro" id="" value="<?php echo $dados[0]['bairro'] ?>" placeholder="Bairro">
                </div>
                
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="cep" id="" value="<?php echo $dados[0]['cep'] ?>" placeholder="CEP">
                </div>         
            </div>
            <!-- linha 4 -->        
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="cidade" id="" value="<?php echo $dados[0]['cidade'] ?>" placeholder="Cidade">           
                </div>
                <div class="col-md-6 mt-2">
                    <select class="form-select" id="estado" name="estado">
                    <option value="">selecione o estado</option>
                    <option value="AC" <?php echo $dados[0]['estado'] == "AC" ? 'selected' : '' ?>>Acre</option>
                    <option value="AL" <?php echo $dados[0]['estado'] == "AL" ? 'selected' : '' ?> >Alagoas</option>
                    <option value="AP" <?php echo $dados[0]['estado'] == "AP" ? 'selected' : '' ?> >Amapá</option>
                    <option value="AM" <?php echo $dados[0]['estado'] == "AM" ? 'selected' : '' ?> >Amazonas</option>
                    <option value="BA" <?php echo $dados[0]['estado'] == "BA" ? 'selected' : '' ?> >Bahia</option>
                    <option value="CE" <?php echo $dados[0]['estado'] == "CE" ? 'selected' : '' ?> >Ceará</option>
                    <option value="DF" <?php echo $dados[0]['estado'] == "DF" ? 'selected' : '' ?> >Distrito Federal</option>
                    <option value="ES" <?php echo $dados[0]['estado'] == "ES" ? 'selected' : '' ?> >Espírito Santo</option>
                    <option value="GO" <?php echo $dados[0]['estado'] == "GO" ? 'selected' : '' ?> >Goiás</option>
                    <option value="MA" <?php echo $dados[0]['estado'] == "MA" ? 'selected' : '' ?> >Maranhão</option>
                    <option value="MT" <?php echo $dados[0]['estado'] == "MT" ? 'selected' : '' ?> >Mato Grosso</option>
                    <option value="MS" <?php echo $dados[0]['estado'] == "MS" ? 'selected' : '' ?> >Mato Grosso do Sul</option>
                    <option value="MG" <?php echo $dados[0]['estado'] == "MG" ? 'selected' : '' ?> >Minas Gerais</option>
                    <option value="PA" <?php echo $dados[0]['estado'] == "PA" ? 'selected' : '' ?> >Pará</option>
                    <option value="PB" <?php echo $dados[0]['estado'] == "PB" ? 'selected' : '' ?> >Paraíba</option>
                    <option value="PR" <?php echo $dados[0]['estado'] == "PR" ? 'selected' : '' ?> >Paraná</option>
                    <option value="PE" <?php echo $dados[0]['estado'] == "PE" ? 'selected' : '' ?> >Pernambuco</option>
                    <option value="PI" <?php echo $dados[0]['estado'] == "PI" ? 'selected' : '' ?> >Piauí</option>
                    <option value="RJ" <?php echo $dados[0]['estado'] == "RJ" ? 'selected' : '' ?> >Rio de Janeiro</option>
                    <option value="RN" <?php echo $dados[0]['estado'] == "RN" ? 'selected' : '' ?> >Rio Grande do Norte</option>
                    <option value="RS" <?php echo $dados[0]['estado'] == "RS" ? 'selected' : '' ?> >Rio Grande do Sul</option>
                    <option value="RO" <?php echo $dados[0]['estado'] == "RO" ? 'selected' : '' ?> >Rondônia</option>
                    <option value="RR" <?php echo $dados[0]['estado'] == "RR" ? 'selected' : '' ?> >Roraima</option>
                    <option value="SC" <?php echo $dados[0]['estado'] == "SC" ? 'selected' : '' ?> >Santa Catarina</option>
                    <option value="SP" <?php echo $dados[0]['estado'] == "SP" ? 'selected' : '' ?> >São Paulo</option>
                    <option value="SE" <?php echo $dados[0]['estado'] == "SE" ? 'selected' : '' ?> >Sergipe</option>
                    <option value="TO" <?php echo $dados[0]['estado'] == "TO" ? 'selected' : '' ?> >Tocantins</option>
                    <option value="EX" <?php echo $dados[0]['estado'] == "EX" ? 'selected' : '' ?> >Estrangeiro</option>
                    </select>                
                </div>
            </div>
            <!-- linha 5 -->
            <div class="row">
                <div class="col-mb-12 mt-4">
                    <input class="form-control" type="email" name="email" value="<?php echo $dados[0]['email'] ?>" id="" placeholder="Email">                    
                </div>
            </div>
            <!-- linha 6 -->
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="cpf" id="" value="<?php echo $dados[0]['cpf'] ?>" placeholder="CPF">                
                </div>

                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="rg" id="" value="<?php echo $dados[0]['rg'] ?>"  placeholder="RG">                    
                </div>                
            </div>
            <!-- linha 7 -->
            <div class="row">
                <div class="col-mb-12 mt-2">
                    <input class="form-control" type="date" name="nascimento" id="" placeholder="Data de nacimento">                    
                </div>
            </div>
            <!-- linha 8 -->
            <div class="row">
                <div class="col-md-6 mt-2">
                    <select class="form-select" name="civil" id="" placeholder="estado civil">
                    <option value="">selecione seu estado civil</option>
                    <option value="solteiro" <?php echo $dados[0]['civil'] == "solteiro" ? 'selected' : '' ?>>Solteiro</option>
                    <option value="casado" <?php echo $dados[0]['civil'] == "casado" ? 'selected' : '' ?>>Casado</option>
                    <option value="compremetido" <?php echo $dados[0]['civil'] == "comprometido" ? 'selected' : '' ?>>compormetido</option>
                    <option value="viuva" <?php echo $dados[0]['civil'] == "viuva" ? 'selected' : '' ?>>viuvo(a)</option>
                    </select>                    
                </div>

                <div class="col-md-6 mt-2">
                    <select class="form-select" name="sexo" id="">
                        <option value="" >selecione seu genero</option>
                        <option value="Homem"  <?php echo $dados[0]['sexo'] == "Homem" ? 'selected' : '' ?>>Homem</option>
                        <option value="mulher" <?php echo $dados[0]['sexo'] == "mulher" ? 'selected' : '' ?>>mulher</option>
                        <option value="omniman"<?php echo $dados[0]['sexo'] == "omniman" ? 'selected' : '' ?>>omniman</option>
                    </select>                    
                </div>

            </div>
            <!-- linha 9 -->
            <div class="row">
                <div class="col-mb-12 mt-2">
                    <input class="form-control" type="password" name="senha" id="" placeholder="insira a senha">                    
                </div>

            </div>
            <!-- linha 10 -->
            <div class="row">
                <div class="col-mb-12 mt-2">
                    <input class="form-control" type="password" name="csenha" id="" placeholder="confirmar a senha">                    
                </div>
            </div>
            <!-- linha 11 -->
            <div class="row">
                <div class="col-mb-12 mt-2">
                    <input class="btn btn-primary" type="submit" value="enviar">                    
                </div>
            </div>
        </form>

        <?php
            if (isset($_SESSION["Resposta"])) {
                $resposta = $_SESSION["Resposta"];
                echo $resposta;
            }

        ?>          
    </div>

</body>
</html>