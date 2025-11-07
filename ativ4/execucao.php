<?php

    require_once("modelo/Ingresso.php");
    require_once("modelo/IngressoVIP.php");
    require_once("modelo/IngressoCamarote.php");

    $ingresso = new Ingresso();
    $ingresso->setValor(30);
    print "O valor do ingresso é " . $ingresso->getValorTotal() . "\n";

    $ingressoVIP = new IngressoVIP();
    $ingressoVIP->setValor(30);
    $ingressoVIP->setValorAdicional(10);
    print "O valor do ingresso é " . $ingressoVIP->getValorTotal() . "\n";

    $ingressoCamarote = new IngressoCamarote();
    $ingressoCamarote->setValor(30);
    $ingressoVIP->setValorAdicional(10);
    $ingressoCamarote->setValorAdicionalCamarote(10);
    print "O valor do ingresso é " . $ingressoCamarote->getValorTotal() . "\n";
