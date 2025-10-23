<?php

function encriptar($mensaje,$clave){
    $cif = "";
    $separado = str_split($mensaje);
    foreach($separado as $char){
        $cif .= chr(ord($char)+$clave);
    }
    return $cif;
}

function desencriptar($mensaje,$clave){
    $des = "";
    $separado = str_split($mensaje);
    foreach($separado as $char){
        $des .= chr(ord($char)-$clave);
    }

    return $des;
}

$msj = "hasta luego";
$cl = 3;

$cifrado = encriptar($msj,$cl);
echo $cifrado;
echo "<br>";
echo desencriptar($cifrado,$cl);

