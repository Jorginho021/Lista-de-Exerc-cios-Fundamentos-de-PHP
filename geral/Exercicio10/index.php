<?php
require_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio10</title>
    <link rel="stylesheet" href="./estilo.css?v=20260304">
</head>

<body>
    <div class="card">
        <h1>Cálculo de Média</h1>
        <p>Notas: <strong><?= implode(', ', $notas); ?></strong></p>
        <p>Média: <strong><?= number_format($media, 2); ?></strong></p>
        <p>Status: <strong><?= $status; ?></strong></p>
    </div>
</body>

</html>
