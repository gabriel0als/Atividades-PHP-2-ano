<?php

    class Ingresso {
        protected float $valor;

        public function getValorTotal() {
            $dados = $this->valor;
            return $dados;
        }

        public function getValor(): float
        {
                return $this->valor;
        }

        public function setValor(float $valor): self
        {
                $this->valor = $valor;

                return $this;
        }
    }