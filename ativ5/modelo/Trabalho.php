<?php

    require_once("Instrumento.php");

    class Trabalho extends Instrumento {

        public function getNotaFinal() {
            $porcentagem = (parent::getNotaFinal() * 20) / 100;
            $nota = parent::getNotaFinal() + $porcentagem;

            if ($nota > 10) {
                $nota = 10;
            } 
            return $nota;
        }
    }