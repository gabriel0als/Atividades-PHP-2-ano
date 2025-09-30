<?php

require_once("Mago.php");

class Curandeiro extends Mago {
    private int $forcaDeCura;

    public function lancaPoder() {
        print "O mago " . $this->nome . ", do tipo curandeiro, possui força de " . $this->forcaDeCura . " e lançou o poder " . $this->poder->getDescricao() . " com força total";
    }

    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}