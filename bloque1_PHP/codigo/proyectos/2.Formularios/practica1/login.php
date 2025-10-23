<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES App - Login</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5 px-5">
        <form action="controlador.php" method="POST">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="correo">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contra">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        </form>
    </div>




    <script src="./js/bootstrap.min.js"></script>

</body>

</html>