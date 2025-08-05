<?php

class Carta {
    private int $numero;
    private string $nome;
    private string $tipo;


    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

//Programa Principal
$cartas = array();
for ($i=0; $i < 7; $i++) { 
    $carta = new Carta;
    $carta->setNumero(readline("Informe o número da carta: "));
    $carta->setNome(readline("Informe o nome da carta: "));

    $cartas[$i] = $carta;
}

