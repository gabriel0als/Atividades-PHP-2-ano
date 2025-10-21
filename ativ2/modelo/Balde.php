<?php

require_once("Produto.php");

class Balde extends Produto {
    private $capacidade;

    public function getDados() {
        $dados = parent::getDados();
        $dados .= " Capacidade: " . $this->capacidade;
        return $dados;
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}