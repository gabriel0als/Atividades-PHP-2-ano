<?php

    require_once("Instrumento.php");

    class Prova extends Instrumento {

        public function getNotaFinal() {
            $porcentagem = (parent::getNotaFinal() * 30) / 100;
            $nota = parent::getNotaFinal() + $porcentagem;

            if ($nota > 10) {
                $nota = 10;
            } 
            return $nota;
        }

    }