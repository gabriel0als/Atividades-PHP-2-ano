<?php

require_once("Mago.php");

class Combatente extends Mago {
    private int $forcaDeAtaque;

    public function lancaPoder() {

    }

    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}