<?php

$diccionario = array(
    "casa" => "house",
    "perro" => "dog",
    "raton" => "mouse",
    "hola"  => "hello",
    "gracias" => "thank you",
    "adios" => "goodbye",
    "agua" => "water",
    "sol" => "sun",
    "luna" => "moon",
    "flor" => "flower"
);

$palabra = "raton";

if (array_key_exists($palabra, $diccionario)) {
    echo "La traducción de " . $palabra . " es " . $diccionario[$palabra];
} else {
    echo "Palabra no encontrada en el diccionario";
}
