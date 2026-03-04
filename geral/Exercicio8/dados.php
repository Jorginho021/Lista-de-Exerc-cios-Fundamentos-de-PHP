<?php
// array com 5 nomes
$nomes = [
    "Ana",
    "Carlos",
    "Julia",
    "Pedro",
    "Marina"
];

$saida = "";
foreach ($nomes as $nome) {
    $saida .= "Nome: $nome\n";
}
