<?php
session_start();

$_SESSION['usuario'] = "jguiben709";
$_SESSION['carro'] = array(
    array("id" => "0011", "cantidad" => 2),
    array("id" => "0012", "cantidad" => 1),
    array("id" => "0013", "cantidad" => 2),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi web</title>
</head>

<body>
    <h1>Bienvenido</h1>
    <a href="./otra.php">Otra página</a>
</body>

</html>