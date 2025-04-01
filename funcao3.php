<?php


$nome = readline("Informe o nome: ");
$habitantes = readline("Informe quantos habitantes tem: ");
$area = readline("Informe a área: ");
$altitude = readline("Informe a altitude: ");
$estado = readline("Informe o estado: ");

imprimeDados($nome, $habitantes, $area, $altitude, $estado);

function imprimeDados($nome, $habitantes, $area, $altitude, $estado){
    print "$nome | $habitantes | $area | $altitude | $estado";
}