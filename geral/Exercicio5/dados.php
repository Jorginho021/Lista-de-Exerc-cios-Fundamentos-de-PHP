<?php
// variável nota
$nota = 6; // altere para testar diferentes resultados

if ($nota >= 7) {
    $mensagem = "Aprovado";
} elseif ($nota >= 5) {
    $mensagem = "Recuperação";
} else {
    $mensagem = "Reprovado";
}
