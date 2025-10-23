<?php
/*
3. Tenemos el radio de un circulo almacenado en la variable $radio obtenida de
forma aleatoria, calcular y mostrar por pantalla el volumen de una esfera de ese
radio.
*/

$radio = rand(1,20);

$volumen = pow($radio, 3) * pi() * 4/3;

echo "El radio de la esfera es de $radio cms";
echo "<br>";
echo "El volumen de la esfera es $volumen cms cúbicos";

?> 