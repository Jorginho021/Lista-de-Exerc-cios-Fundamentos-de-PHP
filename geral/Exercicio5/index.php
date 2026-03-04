<?php
require_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
    <link rel="stylesheet" href="./estilo.css?v=20260304">
</head>

<body>
    <div class="card">
        <h1>Sistema de Notas</h1>
        <p>Nota informada: <strong><?= $nota; ?></strong></p>
        <p>Resultado: <strong><?= $mensagem; ?></strong></p>
    </div>
</body>

</html>
