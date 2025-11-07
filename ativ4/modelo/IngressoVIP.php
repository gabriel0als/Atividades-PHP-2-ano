<?php

    require_once("Ingresso.php");

    class IngressoVIP extends Ingresso {
        private float $valorAdicional;

        public function getValorTotal() {
            $dados = parent::getValorTotal();
            $dados = $dados + $this->valorAdicional;
            return $dados;
        }

        public function getValorAdicional(): float
        {
                return $this->valorAdicional;
        }

        public function setValorAdicional(float $valorAdicional): self
        {
                $this->valorAdicional = $valorAdicional;

                return $this;
        }
    }