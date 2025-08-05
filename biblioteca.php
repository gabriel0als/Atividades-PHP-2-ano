<?php

class Livro {
    private string $titulo;
    private string $autor;
    private string $genero;
    private int $quantidadePaginas;
    private float $valorPago;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getQuantidadePaginas()
    {
        return $this->quantidadePaginas;
    }

    public function setQuantidadePaginas($quantidadePaginas): self
    {
        $this->quantidadePaginas = $quantidadePaginas;

        return $this;
    }

    public function getValorPago()
    {
        return $this->valorPago;
    }

    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }

}

//PROGRAMA PRINCIPAL
$livros = array();
do {
    print "----------------------------\n";
    print "(1) - Inserir livro\n(2) - Listar livros\n(3) - Buscar livro\n(4) - Total gasto\n(0) - Sair\n";
    print "----------------------------\n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $livro = new Livro;
            $livro->setTitulo(readline("Informe o título do livro: "));
            $livro->setAutor(readline("Informe o autor do livro: "));
            $livro->setGenero(readline("Informe o gênero do livro: "));
            $livro->setQuantidadePaginas(readline("Quantas páginas tem o livro: "));
            $livro->setValorPago(readline("Informe o preço do livro: "));
            array_push($livros, $livro);
            
            break;
        
        case 2:
            if (empty($livros)) {
                print "Não há nenhum livro registrado\n";
            } else {
                $posicao = 1;
                foreach ($livros as $l) {
                    print "Livro $posicao: " . "Nome: " . $l->getTitulo() . ", autor: " . $l->getAutor() . ", gênero: " . $l->getGenero() . ", quantidade de páginas: " . $l->getQuantidadePaginas() . ", preço: " . "\n";

                    $posicao++;
                }
            }
            break;
        
        case 3:
            if (empty($livros)) {
                print "Não há nenhum livro registrado\n";
            } else {
                $i = readline("Informe o numero do livro que deseja: ");
                if (count($livros) >= $i and $i > 0) {
                    print "Nome: " . $livros[$i-1]->getTitulo() . ", autor: " . $livros[$i-1]->getAutor() . ", gênero: " . $livros[$i-1]->getGenero() . ", quantidade de páginas: " . $livros[$i-1]->getQuantidadePaginas() . "\n";
                } else {
                    print "\nEssa opção é inválida\n";
                }
            }
            break;

        case 4:
            if (empty($livros)) {
                print "Você não comprou nenhum livro\n";
            } else {
                $valor = 0;
                foreach ($livros as $l) {
                    $valor += $l->getValorPago();
                }
                print "Valor gasto com livros: R$$valor\n";
            }
            break;

        case 0: 
            break;

        default:
            print "Digite um número válido\n";
            break;
    }

} while ($opcao != 0);