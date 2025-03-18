<?php

$ano = 1980;
do {
    if (($ano % 4 == 0 and $ano % 100 != 0) || ($ano % 4 == 0 and $ano % 400 == 0)) {
        print "$ano é um ano bissexto" . "\n";
    }
    $ano++;
} while ($ano <= 2024);
