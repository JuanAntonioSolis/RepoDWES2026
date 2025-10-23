<?php
/*
6. Dado un DNI guardado en una variable $dni, obtener la letra y mostrar por
pantalla el DNI completo DNI-LETRA. El documento nacional de identidad DNI en
España consta de un numero de 8 cifras y de una letra. La letra del DNI se obtiene
a partir de los números como describen los pasos siguientes:
- Calcular el resto de dividir el número de DNI entre 23
- El número obtenido esta entre 0 y 22. Seleccionar una letra asociada a dicho
número en la siguiente tabla:
0 -> T, 1 -> R, 2 -> W, 3 -> A, 4 -> G, 5 -> M, 6 -> Y, 7 -> F, 8 -> P, 9 -> D, 10 -> X, 11 ->
B, 12 -> N, 13 -> J, 14 -> Z, 15 -> S, 16 -> Q, 17 -> V, 18 -> H, 19 -> L, 20 -> C, 21 -> K,
22 -> E
*/

$dni = 54118457;
$letter = "";

$letras = array(
    array(0 => "T"),
    array(1 => "R"),
    array(2 => "W"),
    array(3 => "A"),
    array(4 => "G"),
    array(5 => "M"),
    array(6 => "Y"),
    array(7 => "F"),
    array(8 => "P"),
    array(9 => "D"),
    array(10 => "X"),
    array(11 => "B"),
    array(12 => "N"),
    array(13 => "J"),
    array(14 => "Z"),
    array(15 => "S"),
    array(16 => "Q"),
    array(17 => "V"),
    array(18 => "H"),
    array(19 => "L"),
    array(20 => "C"),
    array(21 => "K"),
    array(22 => "E")
);

foreach ($letras as $letra) {
    foreach ($letra as $clave => $valor) {
        if ($dni % 23 == $clave) {
            $letter = $valor;
        }
    }
}

echo $dni . "-" . $letter;

?>