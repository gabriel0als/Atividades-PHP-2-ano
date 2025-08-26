<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pedidos = array();

$pratos = [
    new Prato(1, "Camarão à Milanesa", 110.0),
    new Prato(2, "Pizza Margherita", 80.0),
    new Prato(3, "Macarrão à Carbonara", 60.0),
    new Prato(4, "Bife à Parmegiana", 75.0),
    new Prato(5, "Risoto ao Funghi", 75.0)
];



function retornaPrato($pratos, $numPrato) {
    foreach ($pratos as $p) {
        if ($numPrato == $p->getNumero()) {
            return $p;
        }
    }

    return null;
}

do {
    foreach ($pratos as $p) {
        print "Número: " . $p->getNumero() . ", Nome: " . $p->getNome() . ", Valor: " . $p->getValor() . "\n";
    }

    print "\n(1) - Cadastrar\n(2) - Cancelar\n(3) - Listar\n(4) - Total de vendas\n(0) - Sair\n";

    $opcao = readline("Digite a ação que deseja: ");

    switch ($opcao) {
        case 1:
            $pedido = new Pedido();
            $pedido->setNomeCliente(readline("Informe o seu nome: "));
            $pedido->setNomeGarcom(readline("Informe o nome do garçom: "));
            $numPrato = readline("Informe o número do prato que deseja: ");

            $numerosPratos = array();

            $pedido->setPrato(retornaPrato($pratos, $numPrato));            

            array_push($pedidos, $pedido);
            break;
        
        case 2:

            break;

        case 3:

            break;

        case 4:

            break;

        case 0:
            print "Programa encerrado!";
            break;
        
        default:
            # code...
            break;
    }
} while ($opcao != 0);

