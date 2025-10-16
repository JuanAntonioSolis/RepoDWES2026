<?php
session_start();
session_destroy(); //Borrar el array de sesión

header("Location: otra.php");
