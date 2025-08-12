<?php

class Carta {
    private int $numero;
    private string $nome;
    private string $tipo;

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

//Programa Principal
$cartas = array();
for ($i=0; $i < 2; $i++) { 
    $carta = new Carta;
    $carta->setNumero(readline("Informe o número da carta: "));
    $carta->setNome(readline("Informe o nome da carta: "));

    $cartas[$i] = $carta;
}


$cartaSorteada = array_rand($cartas);

do {
    print "\nSuas cartas são: \n";

    foreach ($cartas as $c) {
        print "Número: " . $c->getNumero() . " | Nome: " . $c->getNome() . "\n";
    }

    $opcao = readline("Diga o número da carta que deseja chutar: ");

    if ($opcao == $cartas[$cartaSorteada]->getNumero())  {
        print "Você é bom hein\n";
    } else {
        print "Você é muito ruim, tente novamente\n";
    }

} while ($opcao != $cartas[$cartaSorteada]->getNumero());



