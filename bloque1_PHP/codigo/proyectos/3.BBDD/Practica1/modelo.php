<?php

function conexionDB(){

    try{
        //Data Source Name, se especifica tipo de base de datos (mysql).
        //Host: mariad
        //Puerto: 3306 Puerto interno del contenedor mariadb
        //Nombre de la base de datos: gestion_incidencias
        $dsn = "mysql:host=mariadb:3306;dbname=gestion_incidencias";

        $dbh = new PDO($dsn,"usuario","password");
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex){
        echo $ex->getMessage();
    }

    return $dbh;
}

//Insertar técnico
function insertTecnico($nombre, $email, $password,$fecha_registro){
    $conexion = conexionDB();

    //Comprobar que mail no está en BBDD
    $existe = getPassword($email);
    if($existe != null){
        return false;
    }

    $stmt = $conexion->prepare(("INSERT INTO tecnicos (nombre,email,password,fecha_registro) VALUES (:nombre,:email,:password,:fecha_registro)"));
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":fecha_registro", $fecha_registro);
    $stmt->execute();
    
    return true;

}

//Autenticación técnico
function getPassword($email){
    $conexion = conexionDB();

    $stmt = $conexion->prepare("SELECT * FROM tecnicos WHERE email=:email");
    $stmt-> bindParam(":email",$email);
    $stmt->execute();

    $usuario = $stmt->fetch();
    if ($usuario == false){ //Email no registrado
        return null;
    } else { //Email registrado, devuelve password hash
        return $usuario["password"];
    }
}