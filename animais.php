<?php

class Animal {

    //Atributos
    public $patas;
    public $especie;
    public $pele;
    public $cor;

    function __construct($a)
    {
        if ($a == "cachorro") {
            $this->especie = "cachorro";
            $this->patas = 4;
            $this->pele = "pelo";
            $this->cor = "marrom";
        }
        elseif ($a == "porco") {
            $this->especie = "porco";
            $this->patas = 4;
            $this->pele = "liso";
            $this->cor = "rosa";
        }
        elseif ($a == "vaca") {
            $this->especie = "vaca";
            $this->patas = 4;
            $this->pele = "pelo";
            $this->cor = "preto e branco";
        }
        elseif ($a == "galinha") {
            $this->especie = "galinha";
            $this->patas = 2;
            $this->pele = "penas";
            $this->cor = "branco";
        }
        elseif ($a == "pato") {
            $this->especie = "pato";
            $this->patas = 2;
            $this->pele = "penas";
            $this->cor = "branco";
        } else {
            print "Não conheço esse animal";
    }
    }

    //Métodos
    function emitirSom()
    {
        if ($this->especie == "cachorro") {
            return "Au au au\n";
        }
        if ($this->especie == "porco") {
            return "Ronc Ronc Ronc \n";
        }
        if ($this->especie == "vaca") {
            return "Muu Muu \n";
        }
        if ($this->especie == "galinha") {
            return "Póó Póó \n";
        }
        if ($this->especie == "pato") {
            return "Quack Quack \n";
        }
    }

    function movimentar()
    {
        if ($this->especie == "cachorro") {
            return "o cachorro anda \n";
        }
        elseif ($this->especie == "porco") {
            return "o porco anda \n";
        }
        elseif ($this->especie == "vaca") {
            return "a vaca anda \n";
        }
        elseif ($this->especie == "galinha") {
            return "a galinha plana \n";
        }
        elseif ($this->especie == "pato") {
            return "o pato nada \n";
        }
    }
}

$resposta = readline("Informe uma espécie de fazenda: ");

if ($resposta == "cachorro") {
    $cachorro = new Animal($resposta);

    print "O $cachorro->especie é $cachorro->cor, ele tem $cachorro->patas patas, sua pele é de $cachorro->pele, " . $cachorro->movimentar() . "e faz som " . $cachorro->emitirSom() . "\n";
}
elseif ($resposta == "porco") {
    $porco = new Animal($resposta);

    print "O $porco->especie é $porco->cor, ele tem $porco->patas patas, sua pele é $porco->pele, " . $porco->movimentar() . "e faz som " . $porco->emitirSom() . "\n";

}
elseif ($resposta == "vaca") {
    $vaca = new Animal($resposta);

    print "A $vaca->especie é $vaca->cor, ela tem $vaca->patas patas, sua pele é de $vaca->pele, " . $vaca->movimentar() . "e faz som " . $vaca->emitirSom() . "\n";


}
elseif ($resposta == "galinha") {
    $galinha = new Animal($resposta);

    print "A $galinha->especie é $galinha->cor, ela tem $galinha->patas patas, sua pele é de $galinha->pele, " . $galinha->movimentar() . "e faz som " . $galinha->emitirSom() . "\n";
;

}
elseif ($resposta == "pato") {
    $pato = new Animal($resposta);

    print "O $pato->especie é $pato->cor, ele tem $pato->patas patas, sua pele é de $pato->pele, " . $pato->movimentar() . "e faz som " . $pato->emitirSom() . "\n";
;

} else{
print "Não tenho informações sobre esse animal\n";
}
