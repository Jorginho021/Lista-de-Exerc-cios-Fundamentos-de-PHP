<?php
// array com vários números
$numeros = [2, 7, 10, 3, 8, 5, 12];

$pares = 0;
$impares = 0;

foreach ($numeros as $n) {
    if ($n % 2 === 0) {
        $pares++;
    } else {
        $impares++;
    }
}
