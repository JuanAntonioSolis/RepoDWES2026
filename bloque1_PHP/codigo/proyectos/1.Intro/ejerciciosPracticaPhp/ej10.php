<?php
/*
10. Rellena un array de 10 números enteros, con los 10 primeros números naturales.
Calcula la media de los que están en posiciones pares y muestra los impares por
pantalla.
*/
//               0  1  2  3  4  5  6  7  8  9 
$enteros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$pares = array();
$impares = array();
$media = 0;


for ($i = 0; $i < count($enteros); $i++) {
    if ($i % 2 != 0) {
        $impares[] = $enteros[$i];
    } else {
        array_push($pares, $enteros[$i]);
        $media = array_sum($pares) / count($pares);
    }
}

echo "La media de los que están en posiciones pares es: $media";

echo "<br> Los números en posiciones impares son: ";
foreach ($impares as $impar) {
    echo $impar . ", ";
}







 







?>