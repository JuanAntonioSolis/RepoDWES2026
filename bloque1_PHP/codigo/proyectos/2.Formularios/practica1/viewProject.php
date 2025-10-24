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
    <title>DWES App - Viewing Project</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <!--Cabecera-->
    <?php include("./header.php"); ?>

    <div class="container">
        <main class="mt-5">
            <div class="card">
            <div class="card-header">
                Detalle del proyecto <?= $_REQUEST['id']; ?>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $_REQUEST['nombre']; ?></p>
                <p class="card-text"><?= $_REQUEST['fechaInicio']; ?></p>
                <p class="card-text"><?= $_REQUEST['fechaFinPrevista']; ?></p>
                <p class="card-text"><?= $_REQUEST['diasTranscurridos']; ?></p>
                <p class="card-text"><?= $_REQUEST['porcentajeCompletado']; ?></p>
                <p class="card-text"><?= $_REQUEST['importancia']; ?></p>
                
                <a href="./projects.php" class="btn btn-primary">Volver</a>
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