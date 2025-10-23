<?php

$nombres = array("Consentino", "Garciden", "Deretil", "Makito", "Globomatik");

function convierteClientes($names, $opcion)
{
    if ($opcion == "L") {
        foreach ($names as $name) {
            $minus = lcfirst($name);
            echo $minus . ",";
        }

    } else if ($opcion == "U") {
        foreach ($names as $name) {
            $mayus = strtoupper($name);
            echo $mayus . ",";
        }

    } else if ($opcion == "M") {
        foreach ($names as $name) {
            $first = ucfirst($name);
            echo $first . ",";
        }
    }
}


$op1 = "L";
$op2 = "U";
$op3 = "M";


convierteClientes($nombres, $op3);