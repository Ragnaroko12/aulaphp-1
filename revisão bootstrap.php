<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
   
    <!-- as tags do bootstrap sempre devem ser colocadas nas propriedades class -->
     <!-- tag container corresponde a centralização do conteúdos, criando
      uma borda ao redor da tela -->
    <div class="container">
        <h1>Formulário de Cadastro</h1>
        <!-- class="row" cria uma linha na tabela -->
        <form action="" method="post" >
            <!-- class="col-md-6 adiciona tamanho aos componentes
             tamanho máximo é 12 e podemos criar frações disso no caso
            6 é metado do espaço." -->
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" name="nome" id="" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Endereço</label>
                    <input type="text" name="end" id="" class="form-control">
                </div>
            </div>
           
           
        </form>
    </div>
 
    <!-- link de vínculo do Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>