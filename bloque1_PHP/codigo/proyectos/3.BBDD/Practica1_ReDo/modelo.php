<?php

//CONEXIÓN A LA BASE DE DATOS
function conexionDB()
{
    try {
        //Data Source Name, se especifica tipo de base de datos (mysql).
        //Host: mariad
        //Puerto: 3306 Puerto interno del contenedor mariadb
        //Nombre de la base de datos: gestion_incidencias
        $dsn = "mysql:host=mariadb:3306;dbname=gestion_incidencias";

        //Usuario y contraseña de la base de datos. Usuario: usuario / Contraseña: usuario
        $conexion = new PDO($dsn, "usuario", "usuario");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

    return $conexion;
}


//REGISTRO DE UN TÉCNICO

/**
 * Inserta un técnico en BBDD
 * Con getPassword() comprueba que el mail no está ya en BBDD
 * @param mixed $email
 * @param mixed $nombre
 * @param mixed $password
 * @return bool 
 * Devuelve True si se inserta el técnico, de lo contrario devuelve false.
 */
function insertTecnico($email, $nombre, $password, $fecha_registro)
{

    $conexion = conexionDB();

    $existe = getPassword($email);

    if ($existe != null) {
        return false;
    }

    $stmt = $conexion->prepare("INSERT INTO tecnicos (email, nombre, password, fecha_registro) VALUES (:email, :nombre, :password, :fecha_registro)");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":fecha_registro", $fecha_registro);
    $stmt->execute();

    return true;

}

/**
 * Saca la contraseña de un técnico por $email
 * @param mixed $email
 * Devuelve la contraseña si encuentra el usuario, de lo contrario si el mail
 * no está registrado, devuelve null.
 */
function getPassword($email)
{
    $conexion = conexionDB();

    $stmt = $conexion->prepare("SELECT * FROM tecnicos WHERE email=:email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $usuario = $stmt->fetch();
    if ($usuario == false) { //Email no registradoSs
        return null;
    } else { //Email registrado, devuelve password hash
        return $usuario["password"];
    }
}

//LOGIN

function validarTecnico($email, $password){
    $conexion = conexionDB();

    if($conexion == null){
        return false;
    }

    $stmt = $conexion->prepare("SELECT * FROM tecnicos WHERE email = :email");
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $tecnico = $stmt->fetch(PDO::FETCH_ASSOC);

    if($tecnico){
        if(password_verify($password,$tecnico["password"])){
            return $tecnico;
        }
    }

    return false;

}

function obtenerIncidenciasPorTecnico($id_tecnico){

    $conexion = conexionDB();

    if($conexion == null){
        return false;
    }
    
    $stmt = $conexion->prepare("SELECT * FROM incidencias WHERE id_tecnico = :id_tecnico");
    $stmt->bindParam(":id_tecnico", $id_tecnico);
    $stmt->execute();

    $incidencias = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $incidencias;

}



