<?php

session_start();
//Si la sesión no está iniciada, redirige a login.php

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES App - Dashboard</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <!--Cabecera-->
    <?php 
    include("./header.php");
    include("./modelo.php");

    $idLogeado = $_SESSION["idUsuario"];

    $incidencias = obtenerIncidenciasPorTecnico($idLogeado);
    ?>

    <div class="container">
        <main>
            <!-- Cabecera página-->
            <h1 class="h3 mb-2 text-gray-800 text-center mt-5">Proyectos</h1>

            <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
                data-bs-target="#nuevoProyecto">
                Añadir Proyecto
            </button>
            <button type="button" class="btn btn-warning btn-sm mb-2" data-bs-toggle="modal"
                data-bs-target="#eliminarProyectos">
                Eliminar todos
            </button>                       

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Prioridad</th>
                                    <th>Fecha creación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                foreach ($incidencias as $incidencia) {
                                    echo "<tr>";
                                    echo "<td>" . $incidencia["titulo"] . "</td>";
                                    echo "<td>" . $incidencia["tipo"] . "</td>";
                                    echo "<td>" . $incidencia["estado"] . "</td>";
                                    echo "<td>" . $incidencia["prioridad"] . "</td>";
                                    echo "<td>" . $incidencia["fecha_creacion"] . "</td>";
                                    
                                    echo "<td class='px-4'>";
                                    echo "<a class=' btn btn-success ' >Ver</a>";
                                    echo "<a class=' btn btn-danger mx-3' >Eliminar</a>";
                                    echo "</td>";
                                    
                                    echo "</tr>";
                                   
                                }
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <!--Lib con modales-->
    <?php #include("./lib.php");?>


    <!--Bootstrap-->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>