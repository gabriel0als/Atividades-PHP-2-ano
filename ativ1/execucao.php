<?php

require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");
require_once("modelo/Rottweller.php");

$animal = new Animal();
print $animal->falar() . "\n";

$cao = new Cachorro();
print $cao->falar() . "\n";

$gato = new Gato();
print $gato->falar() . "\n";

$rot = new Rottweller();
print $rot->falarAnimal() . "\n";

/*

require_once("modelo/Sobrecarga.php");

$sobre = new Sobrecarga();
$sobre->escrever("Estudantes ansiosos pela Latinoware!");

$sobre->escrever();

*/ 