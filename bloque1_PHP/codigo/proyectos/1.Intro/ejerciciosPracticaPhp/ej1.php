<?php

/*
1. Partiendo de 2 variables $primera y $segunda con valores aleatorios, hacer una
página PHP que calcule y muestre por pantalla:
- la diferencia de $primera menos $segunda
- la división de $primera entre $segunda
Añade un comentario que explique la función de generar números aleatorios.
*/

$primera = rand(1,10);
$segunda = rand(1,10);

$diferencia = $primera - $segunda;
$division = $primera / $segunda;

echo "La diferencia de $primera menos $segunda es: $diferencia";
echo "<br> La división de $primera entre $segunda es: $division";

?>