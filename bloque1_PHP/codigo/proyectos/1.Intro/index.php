<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "Hola, mundo. Estamos en proyectos/index.php";
    ?>

    <p>Esto no está dentro de PHP</p>

    <?= "<br>Hola mundo comprimido" ?>


    <?php
    //$variable = "Hola mundo con variable";
    $numero = 5;

    if ($numero > 3) {
        echo "<br>El número es mayor que 3";
    } else {
        echo "<br>El número no es mayor que 3";
    }

    echo "<br>El número es $numero"; //punto y coma al final de cada instrucción
    echo "<br>El número es " . ($numero + 1); //. concatenación de cadenas

    /* Comentario de varias líneas
    echo "Otra línea";
    */

    //DEBILMENTE TIPADO
    $variable = "5"; //cadena
    echo "<br>Variable vale $variable";
    $variable = $variable + 2; //suma, convierte cadena a número
    echo "<br>Variable vale $variable";
    $variable = "Lo que me de la gana"; //cadena
    echo "<br>Variable vale $variable<br>";

    var_dump($variable); //muestra tipo y valor - depurar código
    echo "<br>";

    $condicion = true; //false
    var_dump($condicion);
    echo "<br>";

    //CADENAS
    $cadena = "Esto es una cadena";
    echo "<br>$cadena";
    $cadena2 = 'Esto es otra cadena';
    echo "<br>$cadena2";

    echo '<br><a href="http://www.google.es">Enlace a Google</a><br>';
    echo "<a href='http://www.google.es'>Enlace a Google</a><br>";

    ?>

</body>

</html>