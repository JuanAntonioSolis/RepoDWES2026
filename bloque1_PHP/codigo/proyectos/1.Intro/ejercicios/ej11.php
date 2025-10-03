<?php

function pintarMatriz($m)
{
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            echo $m[$i][$j] . " ";
        }
        echo "<br>";
    }
}

$matriz = array();

for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if (($i == $j) || ($i == 7 - 1 - $j)) {
            $matriz[$i][$j] = 1;
        } else {
            $matriz[$i][$j] = rand(10, 99);
        }
    }
}

pintarMatriz($matriz);
