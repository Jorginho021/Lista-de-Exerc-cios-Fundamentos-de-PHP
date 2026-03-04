<?php
require_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <link rel="stylesheet" href="./estilo.css?v=20260304">
</head>

<body>
    <div class="card">
        <p>
        <h1>Dados Da Matricula</h1>
        <p>Ola
            <?= $nome; ?>
        </p>
        <?= $mensagem; ?>
        </p>
    </div>
</body>

</html>