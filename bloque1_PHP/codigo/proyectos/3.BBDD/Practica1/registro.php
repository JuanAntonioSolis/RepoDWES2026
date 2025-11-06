<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES App - Registro</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5 px-5">

        <?php
        if (isset($_REQUEST["error"])) {
            echo "<p class='text-danger'>" . $_REQUEST["error"] . "</p>";
        }
        ?>


        <form action="controlador.php" method="POST">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">¡Regístrate!</h1>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="correo">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contra">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            

            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="registro">Registro</button>
            </div>
        </form>
    </div>




    <script src="./js/bootstrap.min.js"></script>

</body>

</html>