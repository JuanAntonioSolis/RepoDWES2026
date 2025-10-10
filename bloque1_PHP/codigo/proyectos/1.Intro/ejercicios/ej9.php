<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Círculos</h2>

    <?php

    function colorAleatorio()
    {
        $c1 = rand(0, 255);
        $c2 = rand(0, 255);
        $c3 = rand(0, 255);
        return "rgb(" . $c1 . "," . $c2 . "," . $c3 . ")";
    }

    for ($i = 0; $i < 5; $i++) {
        echo '<svg height="100" width="100" xmlns="http://www.w3.org/2000/svg">
                <circle r="45" cx="50" cy="50" fill="' . colorAleatorio() . '" />
            </svg> ';
    }
    ?>

</body>

</html>