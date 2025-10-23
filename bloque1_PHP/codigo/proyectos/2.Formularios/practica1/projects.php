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
    <title>DWES App - Proyects</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <!--Cabecera-->
    <?php include("./header.php"); ?>

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
                                    <th>Nombre</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Fecha Fin Prevista</th>
                                    <th>Días Transcurridos</th>
                                    <th>Porcentaje Completado</th>
                                    <th>Importancia(1-5)</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $posicion = 0;
                                foreach ($_SESSION["proyectos"] as $proyecto) {
                                    echo "<tr>";
                                    echo "<td>" . $proyecto["nombre"] . "</td>";
                                    echo "<td>" . $proyecto["fechaInicio"] . "</td>";
                                    echo "<td>" . $proyecto["fechaFinPrevista"] . "</td>";
                                    echo "<td>" . $proyecto["diasTranscurridos"] . "</td>";
                                    echo "<td>" . $proyecto["porcentajeCompletado"] . "</td>";
                                    echo "<td>" . $proyecto["importancia"] . "</td>";
                                    
                                    echo "<td class='px-4'>";
                                    echo "<a class=' btn btn-success ' href='controlador.php?accion=verproyecto&id=" . $proyecto['id'] . "'>Ver</a>";
                                    echo "<a class=' btn btn-danger mx-3' href='controlador.php?accion=delproyecto&posicion=" . $posicion . "'>Eliminar</a>";
                                    echo "</td>";
                                    
                                    echo "</tr>";
                                    $posicion++;
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
    <?php include("./lib.php");?>
    <!--Bootstrap-->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>