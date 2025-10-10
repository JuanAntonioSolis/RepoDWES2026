<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Bienvenido a mi diccionario español - inglés</h2>

    <h5>Dime una palabra</h5>

    <form action="ej12_1.php" method="get">
        <label for="">Palabra:</label>
        <input type="text" name="palabra">
        <input type="submit" value="Buscar">
    </form>


    <?php
    $diccionario = array(
        "casa" => "house",
        "perro" => "dog",
        "raton" => "mouse",
        "hola"  => "hello",
        "gracias" => "thank you",
        "adios" => "goodbye",
        "agua" => "water",
        "sol" => "sun",
        "luna" => "moon",
        "flor" => "flower"
    );

    //Detectar que estamos leyendo el formulario
    if ($_GET) {
        $palabra = $_GET['palabra'];

        if (array_key_exists($palabra, $diccionario)) {
            echo "La traducción de " . $palabra . " es " . $diccionario[$palabra];
        } else {
            echo "Palabra no encontrada en el diccionario";
        }
    }



    ?>


</body>

</html>