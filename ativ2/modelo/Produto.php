<?php

class Produto {
    protected $descricao;
    protected $unidadeMedida;

    public function getDados() {
        $dados = "Descrição: " . $this->descricao . " Unidade: " . $this->unidadeMedida;
        return $dados;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}