<?php
require_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
    <link rel="stylesheet" href="./estilo.css?v=20260304">
</head>

<body>
    <div class="card">
        <h1>Dados do Aluno</h1>
        <p><strong>Nome:</strong> <?= $nome; ?></p>
        <p><strong>Cidade:</strong> <?php echo $cidade; ?></p>
        <p><strong>Curso:</strong> <?php echo $curso; ?></p>
    </div>
</body>

</html>