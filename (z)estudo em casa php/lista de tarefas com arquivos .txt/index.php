<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de tarefas</h1>

    <form action="bd.php" method="post">
        <input type="text" name="texto" placeholder="Digite uma tarefa">
        <input type="submit" value="Adicionar">
    </form>

    <h2>Tarefas Salvas:</h2>
    <?php
        // Exibe a lista de tarefas armazenadas
        if (isset($_SESSION["exibir"])) {
            $tarefas = explode("\n", $_SESSION["exibir"]);
            echo "<ul>";
            foreach ($tarefas as $tarefa) {
                if (trim($tarefa) !== "") {
                    echo "<li>" . htmlspecialchars($tarefa) . "</li>";
                }
            }
            echo "</ul>";
        }
    ?>
</body>
</html>