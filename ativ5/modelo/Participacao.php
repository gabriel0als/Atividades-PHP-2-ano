<?php

    require_once("Instrumento.php");


    class Participacao extends Instrumento {

        public function getNotaFinal() {
            $nota = parent::getNotaFinal();

            if ($nota > 10) {
                $nota = 10;
            } 
            return $nota;
        }

    }