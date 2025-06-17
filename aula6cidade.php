<?php

class Cidade {
    private $nome;
    private $populacao;
    private $area;

    public function __construct($nome, $populacao, $area) {
        $this->nome = $nome;
        $this->populacao = $populacao;
        $this->area = $area;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPopulacao() {
        return $this->populacao;
    }

    public function setPopulacao($populacao) {
        if ($populacao >= 0) {
            $this->populacao = $populacao;
        }
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        if ($area >= 0) {
            $this->area = $area;
        }
    }


    public function aumentarPopulacao($quantidade) {
        if ($quantidade > 0) {
            $this->populacao += $quantidade;
        }
    }

    public function mudarNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function expandirArea($quantidade) {
        if ($quantidade > 0) {
            $this->area += $quantidade;
        }
    }

    public function reduzirArea($quantidade) {
        if ($quantidade > 0 && $this->area - $quantidade >= 0) {
            $this->area -= $quantidade;
        }
    }

    public function exibirInformacoes() {
        print "Cidade: " . $this->nome . "\n";
        print "População: " . $this->populacao . "\n";
        print "Área: " . $this->area . " km²\n\n";
    }
}

$cidade1 = new Cidade("Foz do Iguaçu", 250000, 617.7);
$cidade2 = new Cidade("Curitiba", 1900000, 434.9);

$cidade1->aumentarPopulacao(5000);
$cidade1->expandirArea(10);
$cidade1->mudarNome("Nova Foz do Iguaçu");

$cidade2->reduzirArea(20);
$cidade2->aumentarPopulacao(10000);

$cidade1->exibirInformacoes();
$cidade2->exibirInformacoes();


