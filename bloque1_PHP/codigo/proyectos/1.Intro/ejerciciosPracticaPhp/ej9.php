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
    9. Realiza un programa que pinte 5 círculos en horizontal cada uno de un color
    diferente aleatorio.
    Puedes usar la función SVG circle para dibujar los círculos.
    */
    $colores = array("blue", "red", "purple", "pink", "orange", "yellow", "black", "brown", "green", "white");
   


   

    for ($i = 0; $i < 5; $i++) {
        $color_random = $colores[array_rand($colores, 1)];
        
        echo '<svg height="100" width="100">
            <circle cx=50  cy=50 r=40 stroke=black stroke-width=3 fill=' . $color_random . ' />
            </svg>';
    }

    ?>

</body>

</html>