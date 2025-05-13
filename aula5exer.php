<?php

class Retangulo {
    public $base;
    public $altura;

    function area() {
        $area = $this->base*$this->altura;

        return $area;
    }
    function perimetro() {
        $perimetro = $this->base*2 + $this->altura*2;

        return $perimetro;
    }
}

//Programa principal
$retangulo = new Retangulo();

for ($i=0; $i < 3; $i++) { 
    $retangulo->base = readline("Informe a base do retângulo: ");
    $retangulo->altura = readline("Informe a altura do retângulo: ");

    $area = $retangulo->area();
    $perimetro = $retangulo->perimetro();
    print "A área do retângulo é $area\n";
    print "O perímetro do retângulo é $perimetro\n\n";
}