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
    include("header.php");
    include("./modelo.php");

    $idLogeado = $_SESSION["idUsuario"];

    $filtroEstado = $_REQUEST['estado'] ?? null;
    $filtroTipo = $_REQUEST['tipo'] ?? null;
    $filtroPrioridad = $_REQUEST['prioridad'] ?? null;
    


    $incidencias = obtenerIncidenciasPorTecnico($idLogeado, $filtroEstado, $filtroTipo, $filtroPrioridad);


    ?>

    <div class="container">
        <main>
            <!-- Cabecera página-->
            <h1 class="h3 mb-2 text-gray-800 text-center mt-5">Proyectos</h1>

            <div class="card">
                <div class="card-header bg-dark text-white">
                    Filtrado
                </div>
                <div class="card-body">
                    <form action="controlador.php?accion=listar" method="POST">
                        <div>
                            <label for="estado">Estado:</label>
                            <select name="estado" id="estado" class="form-select">
                                <option value="">Todos</option>
                                <option value="Pendiente" <?= ($filtroEstado == 'Pendiente') ? 'selected' : '' ?>>Pendiente
                                </option>
                                <option value="En proceso" <?= ($filtroEstado == 'En proceso') ? 'selected' : '' ?>>En
                                    proceso</option>
                                <option value="Resuelta" <?= ($filtroEstado == 'Resuelta') ? 'selected' : '' ?>>Resuelta
                                </option>
                                <option value="Cerrada" <?= ($filtroEstado == 'Cerrada') ? 'selected' : '' ?>>Cerrada
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="tipo">Tipo:</label>
                            <select name="tipo" id="tipo" class="form-select">
                                <option value="">Todos</option>
                                <option value="Hardware" <?= ($filtroTipo == 'Hardware') ? 'selected' : '' ?>>Hardware
                                </option>
                                <option value="Software" <?= ($filtroTipo == 'Software') ? 'selected' : '' ?>>Software
                                </option>
                                <option value="Red" <?= ($filtroTipo == 'Red') ? 'selected' : '' ?>>Red
                                </option>
                                <option value="Otros" <?= ($filtroTipo == 'Otros') ? 'selected' : '' ?>>Cerrada
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="prioridad">Prioridad:</label>
                            <select name="prioridad" id="prioridad" class="form-select">
                                <option value="">Todos</option>
                                <option value="Baja" <?= ($filtroPrioridad == 'Baja') ? 'selected' : '' ?>>Baja
                                </option>
                                <option value="Media" <?= ($filtroPrioridad == 'Media') ? 'selected' : '' ?>>Media</option>
                                <option value="Alta" <?= ($filtroPrioridad == 'Alta') ? 'selected' : '' ?>>Alta
                                </option>
                                <option value="Crítica" <?= ($filtroPrioridad == 'Crítica') ? 'selected' : '' ?>>Crítica
                                </option>
                            </select>
                        </div>


                        <div class="d-flex justify-content-center gap-5 mt-4">
                            <button type="submit" class="btn btn-primary ">Filtrar</button>
                            <a href="dashboard.php" class="btn btn-secondary">Limpiar</a>
                        </div>
                    </form>

                </div>
                <div class="d-flex justify-content-center gap-5 card-footer">
                    <button type="button" class="btn btn-primary btn-sm mb-2 col-2 mt-2" data-bs-toggle="modal"
                        data-bs-target="#crear">
                        Añadir Proyecto
                    </button>
                    <button type="button" class="btn btn-warning btn-sm mb-2 col-2 mt-2" data-bs-toggle="modal"
                        data-bs-target="#eliminarTodas">
                        Eliminar todos
                    </button>

                </div>
            </div>


            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Título</th>
                                    <th class="bg-dark text-white">Tipo</th>
                                    <th class="bg-dark text-white">Estado</th>
                                    <th class="bg-dark text-white">Prioridad</th>
                                    <th class="bg-dark text-white">Fecha creación</th>
                                    <th class="bg-dark text-white">Acciones</th>
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
                                    echo "<button type='button' class=' btn btn-danger mx-3' data-bs-toggle='modal' data-bs-target='#eliminarIncidencia&id_incidencia=" . $incidencia['id_incidencia']." ' >Eliminar</a>";
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
    <?php include("lib.php"); ?>

    


    <!--Bootstrap-->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>