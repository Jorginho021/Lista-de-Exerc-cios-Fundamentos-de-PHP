<?php
// variável base da tabuada
$numero = 5; // altere para testar outras tabuadas
$saida = "";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    $saida .= "$numero x $i = $resultado\n";
}
