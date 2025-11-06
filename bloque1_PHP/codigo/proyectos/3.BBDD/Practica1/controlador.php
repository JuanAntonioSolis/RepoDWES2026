<?php

session_start();

include("modelo.php");

//Formulario Login
if (isset($_REQUEST["login"])) {
    $email = $_REQUEST["correo"];
    $password = $_REQUEST["contra"];

    //$password_hash = getPassword($email);
    if (isset($password_hash)) {
        if (password_verify($password, $password_hash)) {
            //Login ok
            $_SESSION["usuario"] = $email;
            header("Location: dashboard.php");
        } else {
            //Password not ok
            header("Location: login.php?error=passwordIncorrecto");
        }
    } else {
        //Mail no existe
        header("Location: login.php?error=emailNoEncontrado");
    }
}

//Formulario Registro
if(isset($_REQUEST["registro"])){
    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email"];
    $password = password_hash($_REQUEST["password"],PASSWORD_BCRYPT);
    $fecha_registro = date("Y-m-d");
    $exito = insertTecnico($nombre,$email,$password,$fecha_registro);

    if($exito){
        $_SESSION["usuario"] = $email;
        header("Location: dashboard.php");
    } else{
        header("Location: registro.php?error=emailYaRegistrado");
    }
}