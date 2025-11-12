<?php

session_start();

include_once("modelo.php");

$accion = $_REQUEST['accion'] ?? '';

switch ($accion) {
    case 'registro':
        // Insertar técnico en BBDD y redirigir a login
        $email = $_REQUEST["correo"];
        $nombre = $_REQUEST["nombre"];
        $password = password_hash($_REQUEST["contra"],PASSWORD_BCRYPT);
        $fecha_registro = date("Y-m-d");

        $exito = insertTecnico($email, $nombre, $password, $fecha_registro);
        if($exito){
            $_SESSION["tecnico"] = $email;
            header("Location: login.php");
        } else{
            header("Location: registro.php?error=emailYaExistente");
        }
        
        break;

    case 'login':
        // Validar credenciales y crear sesión
        $email = $_REQUEST["correo"];
        $password = $_REQUEST["contra"];

        $tecnico = validarTecnico($email,$password);

        if($tecnico){
            $_SESSION["usuario"] = $email;
            $_SESSION["idUsuario"] = $tecnico["id_tecnico"];    
            header("Location: dashboard.php");
        } else{
            header("Location: login.php?error=emailNoEncontrado");
        }

        break;

    case 'logout':
        // Cerrar sesión
        session_destroy();

        header("Location: login.php");

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