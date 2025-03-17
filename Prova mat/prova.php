<?php

function Cilindros($r,$h) {
    $p = pi();// p = pi

    // area da da base
    $Ab = $p*($r*$r);

    //Area lateral
    $Al = 2*$p*$r*$h;

    //Area total 
    $At =$Al+2 * $Ab;

    //Volume 
    $v = $p*($r*$r)*$h;
    // facil dms
    
    echo " cilindro 
    Area da base = $Ab <br> 
    Area lateral = $Al <br> 
    Area total = $At <br>
    Volume = $v";
}

function Cones($h,$g,$r) {
    $p = pi();// p = pi

    // Area da base 
    $Ab = $p * ($r*$r);

    // Area lateral
    $Al = $g*$p*$r;

    // Geratriz
    $G = sqrt(($h*$h) + ($r*$r));

    // Area total
    $At = $Ab + $Al;

    // volume 
    $v = sqrt($Ab * $h);

    echo " cone  
    Area da base = $Ab <br> 
    Area lateral = $Al <br> 
    Area total = $At <br>
    Geratriz = $G <br>
    Volume = $v";
    // demoradinho
}

function cubos($a){
    // Area da base
    $Ab = $a*$a;

    // Area Lateral
    $Al = 4*($a*$a);

    // Area total
    $At = 6*($a*$a);

    // Volume
    $v = $a*$a*$a;

    echo " cubo  
    Area da base = $Ab <br> 
    Area lateral = $Al <br> 
    Area total = $At <br>
    Volume = $v";
}

function esferas($r){
    $p = pi();// p = pi

    // Area 
    $a = 4*$p*($r*$r);

    // Volume 
    $V = 3/(4*$p*($r*$r*$r));

    echo " esfera 
    Area  = $a <br> 
    Volume = $V";
}

function paralelepipedo($a,$b,$c){
    // area total
    $At =2*(($a*$b)+($b*$c)+($a*$c));

    // Volume
    $v = $a*$b*$c;

    echo " paralelepipedo 
    Area  = $a <br> 
    Volume = $v";
}
?>