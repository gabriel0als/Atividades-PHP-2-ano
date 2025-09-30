<?php

    require_once("modelo/Mago.php");
    require_once("modelo/Combatente.php");
    require_once("modelo/Curandeiro.php");
    require_once("modelo/Poder.php");

    $poder1 = new Poder();
    $poder1->setDescricao("Recupera energia");
    $poder1->setForca(100);

    $poder2 = new Poder();
    $poder2->setDescricao("Recupera energia especial");
    $poder2->setForca(100);

    $poder3 = new Poder();
    $poder3->setDescricao("Golpe normal");
    $poder3->setForca(200);

    $poder4 = new Poder();
    $poder4->setDescricao("Golpe especial");
    $poder4->setForca(200);

    $combatente = new Combatente();
    $combatente->setNome(readline("Informe o nome do mago: "));
    