<?php
session_start();

echo "Bienvenido " . $_SESSION['usuario'];
echo " <a href='./cerrarSesion.php'>Cerrar Sesión</a>";
echo "<br>";


foreach ($_SESSION['carro'] as $linea) {
    echo $linea["id"] . "<br>";
}
