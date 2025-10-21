<?php

require_once("Cachorro.php");

class Rottweller extends Cachorro {
    
    public function falar() {
        return "Huf huf";
    }

    public function falarAnimal() {
        return parent::falar();
    }
}