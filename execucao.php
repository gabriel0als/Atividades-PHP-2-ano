<?php

require_once("modelo/Pessoa.php");
require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

print("[1] - Cadastrar pessoa física\n[2] - Cadastrar pessoa jurídica\n[3] - Listar\n[4] - Excluir\n[0] - Sair\n");

$pessoas = array();

do {
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $pessoaFisica = new PessoaFisica();
            $pessoaFisica->setNome(readline("Informe seu nome: "));
            $pessoaFisica->setIdade(readline("Informe sua idade: "));
            $pessoaFisica->setCpf(readline("Informe seu CPF: "));

            array_push($pessoas, $pessoaFisica);
            break;
        
        case 2:
            $pessoaJuridica = new PessoaJuridica();
            $pessoaJuridica->setNome(readline("Informe seu nome: "));
            $pessoaJuridica->setNomeFantasia(readline("Informe o nome fantasia: "));
            $pessoaJuridica->setCnpj(readline("Informe o CNPJ: "));

            array_push($pessoas, $pessoaJuridica);
            break;

        case 3:
            if (empty($pessoas)) {
                print "Você ainda não registrou ninguém\n";
            }
            foreach ($pessoas as $i => $p) {
                if ($p instanceof PessoaFisica) {
                    print "[$i] Física:\nNome: " . $p->getNome() . " - idade: " . $p->getIdade() . " - CPF: " . $p->getCpf() . "\n";
                } elseif ($p instanceof PessoaJuridica) {
                    print "[$i] Jurídica:\nNome: " . $p->getNomeFantasia() . " - CNPJ: " . $p->getCnpj() . "\n";
                }
            }
            break;

        case 4:
            if (empty($pessoas)) {
                print "Você ainda não registrou ninguém\n";
            } else {
                    $indice = readline("Escolha o indice da pessoa que deseja excluir: ");

                    if ($indice > -1 && $indice < (count($pessoas)-1)) {
                        array_splice($pessoas, $indice, 1);
                        print "Registro DELETADO!\n";
                    } else {
                        print "Esse índice não é válido\n";
                    }
            }
            break;

        case 0:
            print "Programa encerrado!";
            die;

        default:
        print "Escolha uma opção válida\n";
            break;
    }
} while ($opcao != 0);