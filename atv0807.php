<?php

class Receita {
    private $descricao;
    private $valor;

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa {
    private $descricao;
    private $valor;

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

//PROGRAMA PRINCIPAL
$receitas = array();
$despesas = array();
$opcao = 0;
do {
    print "\n------------FUNCOES------------\n";
    print "1-Adicionar receita \n";
    print "2-Adicionar despesa \n";
    print "3-Listar receita \n";
    print "4-Listar despesa \n";
    print "5-Sumarizar  \n";
    print "0-Sair \n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $receita = new Receita();
            $receita->setDescricao(readline("Informe qual é a receita: "));
            $receita->setValor(readline("Quanto rende: "));
            array_push($receitas, $receita);
            break;
        
        case 2:
            $despesa = new Despesa();
            $despesa->setDescricao(readline("Informe qual é a despesa: "));
            $despesa->setValor(readline("Quanto gasta: "));
            array_push($despesas, $despesa);
            break;

        case 3:
            if(empty($receitas)) {
                print "Insira alguma receita primeiro.";
            } else {
                foreach ($receitas as $r) {
                    print "Descrição: " . $r->getDescricao() . ", Valor: " . number_format($r->getValor(), 2, ",", '.') . "\n";
                }
            }
            break;

        case 4:
            if(empty($despesas)) {
                print "Insira alguma despesa primeiro.";
            }   else {
                foreach ($despesas as $d) {
                    print "Descrição: " . $d->getDescricao() . ", Valor: " . number_format($d->getValor(), 2, ",", '.') . "\n";
                }
            }
            break;

        case 0:
            print "Programa finalizado";
            break;

        case 5:
            sumarizar($receitas, $despesas);
            break;

        default:
            print "Escolha uma opção válida\n";
    }
    
} while ($opcao != 0);


function sumarizar($receitas, $despesas) {
    $totalreceitas = 0;
    $totaldespesas = 0;

    foreach ($receitas as $r) {
        $totalreceitas += $r->getValor();
    }

    foreach ($despesas as $d) {
        $totaldespesas += $d->getValor(); 
    }


    print "Saldo: " . "R$" . $totalreceitas-$totaldespesas . "\n";
    print "Total das receitas: R$$totalreceitas\n";
    print "Total das despesas: R$$totaldespesas\n";
}
