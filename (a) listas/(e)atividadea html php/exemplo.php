<?php
session_start();
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

        <h1>fixinha da associação Pato</h1>
        <form action="soma.php" method="post" class="row">
            <!-- linha 1 -->
            <div class="row">
                <div class="col-mb-12 mt-2">
                    <input class="form-control" type="text" name="nome" id="" placeholder="nome">                    
                </div>

            </div>

            <h3> endereço</h3>
            <!-- linha 2 -->
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="rua" id="" placeholder="Rua">
                    
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="number" name="numero" id="" placeholder="Numero da casa">
                </div>

            </div>
            <!-- linha 3 -->       
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="bairro" id="" placeholder="Bairro">
                </div>
                
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="cep" id="" placeholder="CEP">
                </div>         
            </div>
            <!-- linha 4 -->        
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade">           
                </div>
                <div class="col-md-6 mt-2">
                    <select class="form-select" id="estado" name="estado">
                    <option value="">selecione o estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                    </select>                
                </div>
            </div>
            <!-- linha 5 -->
            <div class="row">
                <div class="col-mb-12 mt-4">
                    <input class="form-control" type="email" name="email" id="" placeholder="Email">                    
                </div>
            </div>
            <!-- linha 6 -->
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="number" name="cpf" id="" placeholder="CPF">                
                </div>

                <div class="col-md-6 mt-2">
                    <input class="form-control" type="number" name="rg" id="" placeholder="RG">                    
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
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="compremetido">compormetido</option>
                    <option value="viuva">viuvo(a)</option>
                    </select>                    
                </div>

                <div class="col-md-6 mt-2">
                    <select class="form-select" name="sexo" id="">
                        <option value="">selecione seu genero</option>
                        <option value="Homem">Homem</option>
                        <option value="mulher">mulher</option>
                        <option value="omniman">omniman</option>
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