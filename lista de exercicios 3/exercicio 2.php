<?php

$vector1 = [21,24,63,23,45,74,23,54,65,76];
$p1 = 0;

for ($i=0; $i < count($vector1); $i++) { 
    if ($vector1[$i]%2 == 0 ){
        $p1++ ;
    }
}
echo "a quantidade de numeros pares $p1"
?>