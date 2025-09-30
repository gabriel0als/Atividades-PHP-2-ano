<?php

class Poder {
    private string $descricao;
    private int $forca;


    //Métodos
    public function getForcaTotal(int $forcaMago) : float {
        if ($this->descricao == "Recupera energia" or $this->descricao == "Golpe Normal") {
            return $forcaMago;
        } elseif ($this->descricao == "Recupera energia super") {
            return $forcaMago + (($forcaMago * 20) / 100);
        } elseif ($this->descricao == "Golpe especial") {
            return $forcaMago + (($forcaMago * 15) / 100);
        } else {
            return 0.0;
        }
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getForca(): int
    {
        return $this->forca;
    }

    public function setForca(int $forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}