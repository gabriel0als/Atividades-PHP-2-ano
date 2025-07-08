<?php

    class Prato {
        private string $descricao;
        private int $quantidade;
        private float $valorUnitario;

        public function getValorTotal() : float {
            return $this->quantidade * $this->valorUnitario;
        }
        
        public function getDescricao()
        {
            return $this->descricao;
        }
 
        public function setDescricao($descricao): self
        {
            $this->descricao = $descricao;

            return $this;
        }

        public function getQuantidade()
        {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade): self
        {
            $this->quantidade = $quantidade;

            return $this;
        }

        public function getValorUnitario()
        {
            return $this->valorUnitario;
        }

        public function setValorUnitario($valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

            return $this;
        }
    }

    //Programa Principal
    $pratos = array();

    for ($i=0; $i < 2; $i++) { 
       $prato = new Prato();
        
       $prato->setDescricao(readline("Informe o que é o prato: "));
       $prato->setQuantidade(readline("Informe quantos irá trazer: "));
       $prato->setValorUnitario(readline("Informe quanto custa unitariamente: "));

       array_push($pratos, $prato);
    }

$valorTotal = 0;
foreach ($pratos as $p) {
    print "Descrição: " . $p->getDescricao() . ", Quantidade: " . $p->getQuantidade() . ", Valor unitário: " . $p->getValorUnitario() . "\n";
    $valorTotal += $p->getValorTotal();
}

print "O valor total final da janta é R$$valorTotal ";