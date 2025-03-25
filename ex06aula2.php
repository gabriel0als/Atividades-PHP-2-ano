<?php

$n1 = readline("Informe um número: ");
$n2 = readline("Informe um para multiplicá-lo: ");

$result = 0;
for ($i=1; $i <= $n2; $i++) { 
    $result = $result + $n1;
}
print $result;