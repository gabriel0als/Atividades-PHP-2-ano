<?php

    require_once("IngressoVIP.php");

    class IngressoCamarote extends IngressoVIP {
        private float $valorAdicionalCamarote;

        public function getValorTotal() {
            $dados = parent::getValorTotal();
            $dados = $dados + $this->valorAdicionalCamarote;
            return $dados;
        }

        public function getValorAdicionalCamarote(): float
        {
                return $this->valorAdicionalCamarote;
        }

        public function setValorAdicionalCamarote(float $valorAdicionalCamarote): self
        {
                $this->valorAdicionalCamarote = $valorAdicionalCamarote;

                return $this;
        }
    }