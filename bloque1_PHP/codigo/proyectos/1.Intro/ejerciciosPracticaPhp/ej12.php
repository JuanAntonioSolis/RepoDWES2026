<?php
/*
Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array
asociativo. Haz un programa que dada una palabra compruebe si está en el
diccionario y si es así que muestre la traducción, y si no está que indique que no
está en el diccionario. A continuación, muestra el diccionario ordenador en
español
*/

$diccionario = array(
    "coche" => "car",
    "ventilador" => "fan",
    "luz" => "light",
    "altavoz" => "speaker",
    "raton" => "mouse",
    "cartera" => "wallet",
    "portatil" => "laptop",
    "gorra" => "hat",
    "bañador" => "swimsuit",
    "puerta" => "door",
    "mochila" => "backpack",
    "sudadera" => "sweater",
    "zapatos" => "shoes",
    "caja" => "box",
    "libreta" => "notebook",
    "teclado" => "keyboard",
    "auriculares" => "earphones",
    "ventana" => "window",
    "cortina" => "curtain",
    "cargador" => "charger"
);

$palabra = "caja";
$traduccion = "";


if (array_key_exists(($palabra), $diccionario)) {
    echo "La traducción de $palabra es $diccionario[$palabra]";
} else
    echo "La palabra no está en el diccionario";









