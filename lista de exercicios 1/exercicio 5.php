<?php
$n1 = 2;
$n2 = 1;
$n3 = 1;

if ($n1 > $n2) {
    if ($n1 > $n3) {
        echo " $n1 é o maior numero";
    } else {
        echo "$n3 é o maior numero";
    }
} elseif ($n2 > $n3) {
    echo "$n2 é o maior numero";
} elseif ($n3 > $n1) {
    echo "$n3 é o maior numero";
} else{
    echo " todos os 3 numeros tem o mesmo valor";
}

?>