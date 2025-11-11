<?php

session_start();

include("modelo.php");

$accion = $_REQUEST['accion'] ?? '';

switch ($accion) {
    //Registro de un técnico
    //Comprueba que no existe el mail, para registrarlo en la BBDD
    case 'registro':
        $email = $_REQUEST['correo'];
        $nombre = $_REQUEST['nombre'];
        $password = password_hash($_REQUEST['contra'],PASSWORD_BCRYPT);

        $exito = insertTecnico($email,$nombre,$password);
        if($exito){
            $_SESSION['tecnico'] = $email;
            header("Location: dashboard.php");
        } else{
            header("Location: registro.php?error=emailYaExistente");
        }
        break;

    case 'login':
        $email = $_REQUEST['correo'];
        $password = $_REQUEST['contra'];

        $password_hash = getPassword($email);

        if(isset($password_hash)){
            if(password_verify($password, $password_hash)){
                $_SESSION['usuario'] = $email;
                header("Location: dashboard.php");
            } else{
                header("Location: login.php?error=passwordIncorrecto");
            }
        } else{
            header("Location: login.php?error=emailNoEncontrado");
        }
        
        break;
    case 'logout':
        // Cerrar sesión
        break;
    case 'listar':
        // Obtener incidencias del técnico con filtros
        break;
    case 'crear':
        // Insertar nueva incidencia
        break;
    case 'obtener':
        // Obtener datos de una incidencia específica
        break;
    case 'actualizar':
        // Modificar incidencia existente
        break;
    case 'eliminar':
        // Borrar incidencia
        break;
    case 'buscar':
        // Buscar por término
        break;
}