<?php

session_start();

if (isset($_REQUEST["login"])){
    $email = $_REQUEST["correo"];
    $password = $_REQUEST["contra"];
}