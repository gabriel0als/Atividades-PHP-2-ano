<?php

$n1 = readLine("Informe o primeiro número: ");
$n2 = readLine("Informe o segundo número: ");

if ($n1 < $n2) {
    for ($n1; $n1 <= $n2;) { 
        $n1++;
        if ($n1 % 5 == 0) {
            print "$n1 é divisivel por 5\n";
        }
    }
}
if ($n1 > $n2) {
    for ($n1; $n1 >= $n2;) { 
        $n1--;
        if ($n1 % 5 == 0) {
            print "$n1 é divisivel por 5\n";
        }
    }
}