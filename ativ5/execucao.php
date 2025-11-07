<?php

    require_once("modelo/Instrumento.php");
    require_once("modelo/Prova.php");
    require_once("modelo/Trabalho.php");
    require_once("modelo/Participacao.php");

    $avaliacoes = array();
    $contador = 0;
    do {
        $opcao = readline("Informe qual tipo de avaliação você quer: ");

        if ($opcao == "prova") {
            $prova = new Prova();
            $prova->setNota(readline("Informe sua nota: "));
            print "Sua nota final dessa avaliação foi: " . $prova->getNotaFinal() . "\n";
            array_push($avaliacoes, $prova);
            $contador++;

        } elseif ($opcao == "trabalho") {
            $trabalho = new Trabalho();
            $trabalho->setNota(readline("Informe sua nota: "));
            print "Sua nota final dessa avaliação foi: " . $trabalho->getNotaFinal() . "\n";
            array_push($avaliacoes, $trabalho);
            $contador++;

        } elseif ($opcao == "participacao") {
            $participacao = new Participacao();
            $participacao->setNota(readline("Informe sua nota: "));
            print "Sua nota final dessa avaliação foi: " . $participacao->getNotaFinal() . "\n";
            array_push($avaliacoes, $participacao);
            $contador++;

        } else {
            print "Essa avaliação não é válida\n";
        }
    } while ($contador < 3);
    
    $media = 0;
    foreach ($avaliacoes as $v) {
        $media = $v->getNotaFinal() + $media;
    }

    $media = $media / 3;

    print "\nSua média final das 3 notas foi $media";

