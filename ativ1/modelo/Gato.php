<?php

class Gato extends Animal {


    public function falar() {
        return "Miau miau";
    }

    public function falarAnimal() {
        return parent::falar();
    }
}