<?php

require_once("modelo/Produto.php");
require_once("modelo/Computador.php");
require_once("modelo/Balde.php");
require_once("modelo/Livro.php");

$produto = new Produto();
$produto->setDescricao("É um produto");
$produto->setUnidadeMedida(1);

$livro = new Livro();
$livro->setDescricao("É um book");
$livro->setUnidadeMedida(10);
$livro->setAutor("Monteiro Lobato");

$computador = new Computador();
$computador->setDescricao("É um computer");
$computador->setUnidadeMedida(200);
$computador->setProcessador("Intel 9000");
$computador->setMemoria("16gb de RAM");

$balde = new Balde();
$balde->setDescricao("É um balde");
$balde->setUnidadeMedida(25);
$balde->setCapacidade("2000 litros");

print $produto->getDados() . "\n";
print $livro->getDados() . "\n";
print $computador->getDados() . "\n";
print $balde->getDados() . "\n";