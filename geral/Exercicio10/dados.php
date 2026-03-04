<?php
// array de três notas
$notas = [8, 6.5, 7];

function calcularMedia($notas) {
    $soma = 0;
    foreach ($notas as $nota) {
        $soma += $nota;
    }
    return $soma / count($notas);
}

$media = calcularMedia($notas);
$status = $media >= 7 ? "Aprovado" : "Reprovado";
