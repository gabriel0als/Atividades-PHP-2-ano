<?php

require_once("Produto.php");

class Livro extends Produto {
    private $autor;

    public function getDados() {
        $dados = parent::getDados();
        $dados .= " Autor: " . $this->autor;
        return $dados;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}