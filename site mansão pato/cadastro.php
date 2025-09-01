<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro funcionarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <div class="container ">
    <h1>Cadastro funcionarios</h1>
    <div class="gap-2">
        <form action="funçoes.php" method="post">
            <input class="form-control" type="text" name="nome" id="" placeholder="nome">
            <input class="form-control" type="text" name="idade" id="" placeholder="idade">
            <input class="form-control" type="text" name="numero" id="" placeholder="Numero de telefone">
            <input class="form-control" type="text" name="nivel-de-acesso" id="" placeholder="Nivel de acesso">
            <select name="" id="" class="form-select">
                <option value="">selecione o genero</option>
                <option value="">Homem</option>
                <option value="">Mulher</option>
                <option value="">Não binario</option>
            </select>
            <input class="form-control" type="text" name="" id="" placeholder="cargo">
            <div>
                <input type="password" id="inputPassword5" class="form-control" placeholder="senha" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emojis.
                </div>
            </div>
            <div>
                <input type="password" id="inputPassword5" class="form-control" placeholder="confirmar senha" aria-describedby="passwordHelpBlock1">
                <div id="passwordHelpBlock1" class="form-text">
                confirme sua senha
                </div>
            </div>
        </form>
    </div>    
</div>

</body> 