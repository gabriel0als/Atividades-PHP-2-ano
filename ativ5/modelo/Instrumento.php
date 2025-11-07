<?php

    class Instrumento {
        protected float $nota;

        public function getNotaFinal() {
            return $this->nota;
        }

        public function getNota(): float
        {
                return $this->nota;
        }

        public function setNota(float $nota): self
        {
                $this->nota = $nota;

                return $this;
        }
    }