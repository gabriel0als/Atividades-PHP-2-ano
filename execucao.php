<?php

    require_once("modelo/Carro.php");
    require_once("modelo/Fabricante.php");

    $matriz = [
        ["nome" => "Volkswagem", "sigla" => "VW"],
        ["nome" => "Chevrolet", "sigla" => "GM"],
        ["nome" => "Fiat", "sigla" => "F"],
        ["nome" => "Renault", "sigla" => "RN"]
    ];

    for ($i=0; $i < 4; $i++) { 
         $fabricante = new Fabricante();
         $fabricante->setNome($matriz[$i]["nome"]);
         $fabricante->setSigla($matriz[$i]["sigla"]);

         $fabricantes[$i] = $fabricante;
    }


$carros = array();

    do {

        print "(1) - Cadastrar carro\n(2) - Excluir carro\n(3) - Listar carros\n(0) - Sair\n\n";
        

        $opcao = readline("Digite o número da ação: ");

        switch ($opcao) {

            case 1:
                $carro = new Carro();
                $carro->setModelo(readline("Informe o modelo do carro: "));
                $carro->setAnoFabricacao(readline("Informe o ano de fabricação: "));

                print "Existem 4 fabricantes:\nVW (Volkswagem)\nGM (Chevrolet)\nF (Fiat)\nRN (Renault)\n";

                do {
                        $opc = strtoupper(readline("\n\nDigite a sigla de um dos fabricantes: "));
                        $i = 0;

                        if ($opc == "VW") {
                        print "Boa opção!\n\n";
                        $carro->setFabricante($fabricantes[0]);
                        $i++;
                    } elseif ($opc == "GM") {
                        print "Boa opção!\n\n";
                        $carro->setFabricante($fabricantes[1]);
                        $i++;
                    } elseif ($opc == "F") {
                        print "Boa opção!\n\n";
                        $carro->setFabricante($fabricantes[2]);
                        $i++;
                    } elseif ($opc == "RN") {
                        print "Boa opção!\n\n";
                        $carro->setFabricante($fabricantes[3]);
                        $i++;
                    } else {
                        print "Essa opção não é válida\n";
                    }
                } while ($i != 1);

                array_push($carros, $carro);
                break;
            
            case 2:
                if (empty($carros)) {
                    print "Você ainda não cadastrou nenhum carro\n\n";
                    break;
                }

                foreach ($carros as $c) {
                    print "Modelo: " . $c->getModelo() . " | Ano de fabricação: " . $c->getAnoFabricacao() . "\n";
                }
                
                //TERMINAR AQUI


                break;

            case 3:

                break;
            
            case 0:
                print "Programa encerrado!";
                break;

            default:
                print "Esse valor digitado não é válido\n";
                break;
        }
    } while ($opcao != 0);