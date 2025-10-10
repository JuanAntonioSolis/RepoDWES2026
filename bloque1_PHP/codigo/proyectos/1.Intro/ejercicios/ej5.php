<?php


/**
 * Pasamos un dígito del 1 al nueve y nos pinta el número por escrito
 */
function primer($dig)
{
    switch ($dig) {
        case 1:
            return "uno";
            break;
        case 2:
            return "dos";
            break;
        case 3:
            return "tres";
            break;
        case 4:
            return "cuatro";
            break;
        case 5:
            return "cinco";
            break;
        case 6:
            return "seis";
            break;
        case 7:
            return "siete";
            break;
        case 8:
            return "ocho";
            break;
        case 9:
            return "nueve";
            break;
    }
}

/**
 * Pasamos un dígito de 20,30,...,90
 */
function segundo($dig)
{
    switch ($dig) {
        case 2:
            return "veinte";
            break;
        case 3:
            return "treinta";
            break;
        case 4:
            return "cuarenta";
            break;
        case 5:
            return "cincuenta";
            break;
        case 6:
            return "sesenta";
            break;
        case 7:
            return "setenta";
            break;
        case 8:
            return "ochenta";
            break;
        case 9:
            return "noventa";
            break;
    }
}

$numero = 99;

$digito1 = floor($numero / 10);
$digito2 = $numero % 10;

echo $digito1 . "-" . $digito2 . "<br>";

//Números del 1 al 9
if ($digito1 == 0 && $digito2 != 0) {
    echo primer($digito2);
} elseif ($digito1 > 1) {
    if ($digito2 != 0) {
        echo segundo($digito1) . " y " . primer($digito2);
    } else {
        echo segundo($digito1);
    }
}
