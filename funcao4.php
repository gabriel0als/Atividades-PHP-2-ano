<?php 

$a = readline("Informe um valor para A: ");
$b = readline("Informe um valor para B: ");
$c = readline("Informe um valor para C: ");

$media = calcularMedia($a, $b, $c);

print "O resultado da média é: $media\n";

function calcularMedia($a, $b, $c) {
    $media = (($a*3)+($b*5)+($c*2)) / 10;

    return $media;
}