<?php
session_start();

if (!isset($_SESSION["mazo"])) {
    $_SESSION["baraja"] = array(
        "picas" => ["A", "2", "3", "4", "5", "6", "7", "J", "Q", "K"],
        "treboles" => ["A", "2", "3", "4", "5", "6", "7", "J", "Q", "K"],
        "corazones" => ["A", "2", "3", "4", "5", "6", "7", "J", "Q", "K"],
        "diamantes" => ["A", "2", "3", "4", "5", "6", "7", "J", "Q", "K"],
    );

    $mazo = array();
    foreach ($_SESSION["baraja"] as $palo => $cartas) {
        foreach ($cartas as $carta) {
            $mazo = array($palo, $carta);
        }
    }

    //Barajar mazo
    //shuffle($mazo);
    $_SESSION["mazo"] = $mazo;
}



