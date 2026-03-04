<?php
require_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio11</title>
    <link rel="stylesheet" href="./estilo.css?v=20260304">
</head>

<body>
    <div class="card">
        <h1>Contagem de Pares e Ímpares</h1>
        <p>Números: <strong><?= implode(', ', $numeros); ?></strong></p>
        <p>Pares: <strong><?= $pares; ?></strong></p>
        <p>Ímpares: <strong><?= $impares; ?></strong></p>
    </div>
</body>

</html>