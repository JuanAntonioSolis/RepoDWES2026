<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    7. Hacer una página PHP que para un array de 5 elementos muestre por pantalla la
    tabla de multiplicar de dichos elementos (del 1 al 10) (for o while)
    */

    $elementos = array("11", "22", "1", "84", "56");
    echo "<h1> Tablas de multiplicar del 1 al 10</h1>";

    echo "<table border='1'>";
    echo "<tr>";
    foreach ($elementos as $elemento) {
        echo "<th> Tabla del " . $elemento . "</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        foreach ($elementos as $elemento) {
            echo "<td> $elemento * $i = " . ($elemento*$i) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";




    ?>
</body>

</html>