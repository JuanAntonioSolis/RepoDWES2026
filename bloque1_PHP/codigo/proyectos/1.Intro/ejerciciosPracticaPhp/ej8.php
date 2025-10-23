<?php
/*
8. Crea un generador aleatorio de apuesta de la Lotería Primitiva. Cada vez que
recargues la página aparecerá una combinación diferente.
*/

$combinacion = array();

for ($i = 0; $i < 6; $i++) {
    do {
        $valor = rand(1, 49);
    } while (in_array($valor, $combinacion));
    array_push($combinacion, $valor);
}

foreach ($combinacion as $combi) {
    echo $combi . " - ";
}


?>