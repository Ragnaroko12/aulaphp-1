<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class=" bg-warning bg-gradient d-flex  align-items-center vh-100">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <h1>Cadastro de produtos</h1>
        </div>
        <form action="BackCadastrarproduto.php" method="post" class="form-floating mb-3">
            <div class="row mt-1">
                <div class="col-md-4">
                    <input class="form-control" type="text" name="NomeP" id="label" placeholder="Nome do produto" required>
                </div>

                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="Cor" id="" placeholder="Cor do produto" required>
                </div>

                <div class="col-md-4 ">
                    <select name="Material" id="" class="form-select" required>
                        <option value="Plastico">Plastico</option>
                        <option value="Metal">Metal</option>
                        <option value="Aluminio">Aluminio</option>
                        <option value="Aço">Aço</option>
                    </select>
                </div>

            </div>

            <div class="row mt-1">
                <div class="col-md-4">
                    <input class="form-control" type="text" name="Peso" id="label" placeholder="Peso Produto" required>
                </div>

                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="ValorC" placeholder="Valor custo" required>
                </div>

                <div class="col-md-4 ">
                    <input class="form-control" type="number" name="ValorV" id="" placeholder="Valor Venda" required>
                </div>

            </div>

            <div class="row mt-1">
                <div class="col-md-4">
                    <input class="form-control" type="date" name="DataC" id="label" placeholder="Data Cadastro" required>
                </div>

                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="Fornecedor" placeholder="Fornecedor" required>
                </div>

                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="CidadeO" id="" placeholder="Cidade de origem" required>
                </div>

            </div>

            <div class="row mt-1">
                <div class="col-md-4">
                    <input class="form-control" type="text" name="Comentario" id="label" placeholder="Comentaio" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 ">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </div>
        </form>

        <?php
            if (isset($_SESSION['Dados'])) {
                echo $_SESSION['Dados'];
            };
        ?>


    </div>
</body>
</html>
















