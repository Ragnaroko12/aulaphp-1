<?php
// a logica que vou usar é que toda figura abaixo até a marcação é a area da mesma

function Losangulo($D,$d){
    $A = 2/($D*$d);

    echo " Area Losangulo =". round($A,3) ."<br>";
}

function Paralelogramo($b,$h){
    $A = $b*$h;

    echo " Area do Paralelogramo =". round($A,3) ."<br>";
}

function Quadrado($l){
    $A = $l*$l;

    echo " Area Quadrado =". round($A,3) ."<br>";
}

function Trianguloequilatero($l){
    $A = 4/(($l*$l)*(sqrt(3)));

    echo " Area TRiangulo equilatero =". round($A,3) ."<br>";
}

function TringuloQualquer($h,$b){
    $A = 2/($b*$h);

    echo " Area Triangulo Qualquer =". round($A,3) ."<br>";
}

function Retagulo($b,$h){
    $A =$b*$h;

    echo " Area Retangulo =". round($A,3) ."<br>";
}

function Trapezio($b,$B,$h){
    $A = 2/(($B+$b)*$h);

    echo " Area Trapezio =". round($A,3) ."<br>";
}

function Circulo($r){
    $p = pi();// p = pi
    $A = $p*($r*$r);

    echo " Area Circulo =". round($A,3) ."<br> <br>";
}

//____________________________________________________________________
// se vc não entendeu o traço acima é a marcação

function PiramideQuadrangular($m,$a,$h){
    if ($h == null){
        // Altura
        $h = sqrt(($m*$m)+ (($a/2)*($a/2) ));
        echo "Altura = ". round($h,3) ."  <br> ";
    }
  
    // Area da Base
    $Ab = $a*$a;

    // Area
    $A = 2/($a*$m);    

    // Area lateral 
    $Al = 4*$A;

    // Area total
    $At = $Ab+$Al;

    // Volume
    $v = 3/($Ab*$h);

    echo " CONE <br>
    Area da base = ". round($Ab,3) ." <br> 
    Area lateral = ". round($Al,3) ." <br> 
    Area total = ". round($At,3) ."  <br>
    Area = ". round($A,3) ." <br>
    Volume = $v <br> <br> ";
}

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
    
    echo " cilindro <br>
    Area da base = ". round($Ab,3) ." <br> 
    Area lateral = ". round($Al,3) ." <br> 
    Area total = ". round($At,3) ." <br>
    Volume = $v <br> <br> ";
}

function Cones($h,$g,$r) {
    if ($g == 0){
    $g = sqrt(($h*$h) + ($r*$r)); 

    echo "Geratriz = ". round($g,3) ." <br> ";
    }
    
    $p = pi();// p = pi

    // Area da base 
    $Ab = $p * ($r*$r);

    // Area lateral
    $Al = $g*$p*$r;

    // aqui ficaria a geratriz porem achei melhor tranferir pro if

    // Area total
    $At = $Ab + $Al;

    // volume 
    $v = sqrt($Ab * $h);

    echo " cone <br> 
    Area da base = ". round($Ab,3) ." <br> 
    Area lateral = ". round($Al,3) ." <br> 
    Area total = ". round($At,3) ." <br>
    Volume = $v <br> <br> ";
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

    echo " cubo <br> 
    Area da base = ". round($Ab,3) ." <br> 
    Area lateral = ". round($Al,3) ." <br> 
    Area total = ". round($At,3) ." <br>
    Volume = $v <br> <br> ";
}

function esferas($r){
    $p = pi();// p = pi

    // Area 
    $a = 4*$p*($r*$r);

    // Volume 
    $V = 3/(4*$p*($r*$r*$r));

    echo " esfera <br>
    Area  = ". round($a,3) ." <br> 
    Volume = $V <br> <br> ";
}

function paralelepipedo($a,$b,$c){
    // area total
    $At =2*(($a*$b)+($b*$c)+($a*$c));

    // Volume
    $v = $a*$b*$c;

    echo " paralelepipedo <br>
    Area Total = ". round($At,3) ." <br> 
    Volume = $v <br> <br> ";
}

// vou usar essa parte de testes (o sentido de ser aqui em baixo é por organização)
Losangulo(9,10);
Paralelogramo(8,10);
Quadrado(99);
Trianguloequilatero(22);
TringuloQualquer(10,22);
Retagulo(100,6);
Trapezio(10,20,10);
Circulo(8);

// Agr vem os bonitinhos(Lá ele)
//com if
PiramideQuadrangular(20,12,0);

// sem if 
PiramideQuadrangular(12,33,23);
Cilindros(9,10);

// com if 
Cones(10,6,7);

// Sem if 
Cones(10,0,7);
cubos(10);
esferas(8);
paralelepipedo(10,23,10);

echo "commit viado"

// vi que os resultados saem muito quebrados ent apartir de agora tudo será aredondado
// com execeção de volume
?>