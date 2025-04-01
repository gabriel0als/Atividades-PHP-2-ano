<?php

for ($i=0; $i != 3; $i++) { 
    
    $base = readline("Informe o valor da base do retângulo: ");
    $altura = readline("Informe o valor da altura do retângulo: ");

    $area = calcularArea($base, $altura);
    $perimetro = calcularPerimetro($base, $altura);

    print "Este retângulo possui área: $area e perímetro: $perimetro\n\n";
}

function calcularArea($base, $altura){
    $area = $base*$altura;

    return $area;
}

function calcularPerimetro($base, $altura){
    $perimetro = $base*2 + $altura*2;

    return $perimetro;
}