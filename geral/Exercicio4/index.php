<?php
require_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
    <link rel="stylesheet" href="./estilo.css?v=20260304">
</head>

<body>
    <div class="card">
        <h1>Verificação de Idade</h1>
        <p>A idade informada foi <strong><?= $idade; ?></strong></p>
        <p>Resultado: <strong><?= $mensagem; ?></strong></p>
    </div>
</body>

</html>
