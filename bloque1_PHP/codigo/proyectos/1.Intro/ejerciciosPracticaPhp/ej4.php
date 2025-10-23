<?php
/*
4. Tenemos los coeficientes de una ecuación de 2º grado (ax2 + bx + c = 0) en tres
variables $a, $b y $c, muestra la ecuación y sus soluciones. Si no existen, debe
indicarse por pantalla.
*/

$a = 1;
$b = -5;
$c = 6;

$discriminante = pow($b,2) - 4 * $a * $c;

if ($discriminante > 0 ) {
    $s1 = (-$b + sqrt($discriminante)) / (2*$a);
    $s2 = (-$b - sqrt($discriminante)) / (2*$a);
    echo "La ecuación tiene dos soluciones posibles: $s1 y $s2";
} elseif($discriminante == 0){
    $s = -$b / (2 * $a);
    echo "La ecuación tiene una única solución: $s";
} elseif($a == 0){
    echo "No es una ecuación de 2do grado";
} else{
    echo "La ecuación no tiene soluciones reales";
}

?>
