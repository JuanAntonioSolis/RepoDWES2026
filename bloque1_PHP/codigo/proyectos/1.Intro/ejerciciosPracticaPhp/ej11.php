<?php
/*
Crea un array 7x7 con valores numéricos aleatorios excepto las diagonales que
deben ser 1. A continuación muestra el array y después genera un vector que
contenga la suma de cada fila y otro con la suma de cada columna.
*/

function pintarMatriz($m)
{
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            echo $m[$i][$j];
        }
        echo "<br>";
    }
}
$n = rand(10, 99);

$tabla = array();

for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if (($i == $j) || ($i == 6 - $j)) {
            $tabla[$i][$j] = 1;
        } else {
            $tabla[$i][$j] = $n;
        }

    }
}

echo pintarMatriz($tabla);





?>