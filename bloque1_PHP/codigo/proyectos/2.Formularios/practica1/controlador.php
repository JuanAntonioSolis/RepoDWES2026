<?php
session_start();

//Acción formulario de login
if (isset($_REQUEST["login"])) {

    //Se graba el mail en la sesión
    $_SESSION["usuario"] = $_REQUEST["correo"];

    //Tabla de proyectos
    $_SESSION["proyectos"] = array(
        array(
            "id" => "10001",
            "nombre" => "Practica 1 Servidor",
            "fechaInicio" => "15/10/2025",
            "fechaFinPrevista" => "25/10/2025",
            "diasTranscurridos" => 3,
            "porcentajeCompletado" => "15%",
            "importancia" => 5
        ),

        array(
            "id" => "10002",
            "nombre" => "Proyecto en grupo Cliente",
            "fechaInicio" => "10/10/2025",
            "fechaFinPrevista" => "20/10/2025",
            "diasTranscurridos" => 8,
            "porcentajeCompletado" => "78%",
            "importancia" => 2
        ),

        array(
            "id" => "10003",
            "nombre" => "Hackaton Malaga",
            "fechaInicio" => "29/10/2025",
            "fechaFinPrevista" => "29/10/2025",
            "diasTranscurridos" => 0,
            "porcentajeCompletado" => "0%",
            "importancia" => 4
        ),

        array(
            "id" => "10004",
            "nombre" => "Proyecto intermodular",
            "fechaInicio" => "5/10/2025",
            "fechaFinPrevista" => "25/11/2025",
            "diasTranscurridos" => 13,
            "porcentajeCompletado" => "5%",
            "importancia" => 1
        )
    );

    //Redirige a projects.php(ya hay sesión)
    header("Location: projects.php");
}

//Formulario nuevo proyecto (desde modal)
if (isset($_REQUEST["nuevoProyecto"])) {
    $proyecto = array(
        "id" => $_REQUEST['id'],
        "nombre" => $_REQUEST['nombre'],
        "fechaInicio" => $_REQUEST['fechaInicio'],
        "fechaFinPrevista" => $_REQUEST["fechaFinPrevista"],
        "diasTranscurridos" => $_REQUEST['diasTranscurridos'],
        "porcentajeCompletado" => $_REQUEST['porcentajeCompletado'],
        "importancia" => $_REQUEST['importancia']
    );
    array_push($_SESSION['proyectos'], $proyecto);
    header("Location: projects.php");
}

//Formulario eliminar todos los proyectos (desde modal)
if (isset($_REQUEST["eliminarProyectos"])) {
    $_SESSION["proyectos"] = array();
    header("Location: projects.php");
}

//Acciones por URL - GET
if (isset($_REQUEST["accion"])) {

    switch ($_REQUEST["accion"]) {
        //Cerrar sesión y redirigir a login.php
        case 'cerrarsesion':
            session_destroy();
            header("Location: login.php");
            break;
        case 'delproyecto':
            $posicion = $_REQUEST['posicion'];
            unset($_SESSION['proyectos'][$posicion]);
            //Regenerar indices y no dejar huecos
            $_SESSION['proyectos'] = array_values($_SESSION['proyectos']);

            header("Location: projects.php");
            break;
        case 'verproyecto':
            $idProyecto = $_REQUEST['id'];
            foreach($_SESSION['proyectos'] as $proyecto){
                if (strcmp($proyecto['id'],$idProyecto) == 0){
                    $id = $proyecto['id'];
                    $nombre = $proyecto['nombre'];
                    $fechaInicio = $proyecto['fechaInicio'];
                    $fechaFinPrevista = $proyecto['fechaFinPrevista'];
                    $diasTranscurridos = $proyecto['diasTranscurridos'];
                    $porcentajeCompletado = $proyecto['porcentajeCompletado'];
                    $importancia = $proyecto['importancia'];
                } 
            }

            header("Location: viewProject.php?id= " . $id . 
            "&nombre=" . $nombre . 
            "&fechaInicio=" . $fechaInicio . 
            "&fechaFinPrevista=" . $fechaFinPrevista . 
            "&diasTranscurridos=" . $diasTranscurridos .
            "&porcentajeCompletado=" . $porcentajeCompletado . 
            "&importancia=" . $importancia);
            
            break;
    }
}
