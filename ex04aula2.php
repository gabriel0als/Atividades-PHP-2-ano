<?php

$pares = 0;
$impares = 0;
for ($i=1; $i <= 10; $i++) { 
    $resposta = readLine("Digite um número: ");

    if ($resposta % 2 == 0) {
            $pares++;
    } else {
        $impares++;
    }
}

print "Foram informados $pares números pares e $impares números ímpares.";
