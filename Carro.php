<?php

    require_once("Fabricante.php");

    class Carro {
        private string $modelo;
        private string $anoFabricacao;
        private Fabricante $fabricante;

        

        public function getModelo(): string
        {
                return $this->modelo;
        }


        public function setModelo(string $modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }


        public function getAnoFabricacao(): string
        {
                return $this->anoFabricacao;
        }

        public function setAnoFabricacao(string $anoFabricacao): self
        {
                $this->anoFabricacao = $anoFabricacao;

                return $this;
        }

        public function getFabricante(): Fabricante
        {
                return $this->fabricante;
        }

        public function setFabricante(Fabricante $fabricante): self
        {
                $this->fabricante = $fabricante;

                return $this;
        }
    }