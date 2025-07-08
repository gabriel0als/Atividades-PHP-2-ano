<?php

    Class Pessoa {
        private $nome;
        private $sobrenome;
        private $idade;
        private $pessoas = [];

        public function cadastrar($pessoa) {
            $this->pessoas[] = $pessoa;
        }

        public function listar() {
            foreach ($this->pessoas as $p) {
                print $p->nome . " | " . $p->sobrenome . " | " . $p->idade . "\n";
                print $p->nome . " " . $p->sobrenome . ", " . $p->idade . " anos\n";
            }
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getSobrenome()
        {
                return $this->sobrenome;
        }

        public function setSobrenome($sobrenome): self
        {
                $this->sobrenome = $sobrenome;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }
        
    }

    //Programa Principal
    $pessoas = array();
    $opcao = 0;
    do {
        print "\n------------MENU------------\n";
        print "1-Cadastar \n";
        print "2-Listar \n";
        print "0-Sair \n";

        $opcao = readline("Escolha a opção: ");

        switch($opcao) {
            case 0:
                print "Programa encerrado! ";
                break;
            
            case 1:
                $pessoa = new Pessoa();
                $pessoa->setNome(readline("Informe o nome da pessoa: "));
                $pessoa->setSobrenome(readline("Informe o sobrenome da pessoa: "));
                $pessoa->setIdade(readline("Informe a idade da pessoa: "));
                $pessoa->cadastrar($pessoa);
                break;

            case 2:
                if (empty($pessoa)) {
                    print "Cadastre uma pessoa primeiro ";
                } else {
                    $pessoa->listar();
                }
                break;

            default:
                print "opção inválida, escolha novamente; ";
        }
    } while ($opcao != 0);

