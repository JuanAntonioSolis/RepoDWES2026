<?php

//Crea un array de notas de alumnos. Cada elemento del array debe contener las notas de un alumno, incluyendo nombre, materia y nota. Haz un programa con 10 notas de alumnos. Luego debes mostrar las notas ordenadas en orden descendente por alumno, luego ordenadas por nombre, luego mostrar la nota media del curso, y el número de alumnos suspensos.

/*
$notas = array(10, 2, 7, 5, 3, 6, 9);

sort($notas); //Ordena el array de menor a mayor
print_r($notas);
*/

function pintar($notas)
{

    echo "<br>";
    foreach ($notas as $notaAlumno) {
        foreach ($notaAlumno as $clave => $valor) {
            echo $clave . " -> " . $valor . ",&nbsp;  ";
        }
        echo "<br>";
    }
}

$notas = array(
    array("nombre" => "Ana", "materia" => "Matemáticas", "nota" => 8),
    array("nombre" => "Luis", "materia" => "Historia", "nota" => 5),
    array("nombre" => "María", "materia" => "Lengua", "nota" => 9),
    array("nombre" => "Carlos", "materia" => "Ciencias", "nota" => 4),
    array("nombre" => "Lucía", "materia" => "Inglés", "nota" => 7),
    array("nombre" => "Javier", "materia" => "Física", "nota" => 6),
    array("nombre" => "Sofía", "materia" => "Química", "nota" => 10),
    array("nombre" => "Miguel", "materia" => "Biología", "nota" => 3),
    array("nombre" => "Elena", "materia" => "Arte", "nota" => 8),
    array("nombre" => "Pablo", "materia" => "Educación Física", "nota" => 5)
);

//Ordenar por nota
array_multisort(array_column($notas, 'nota'), SORT_DESC, $notas);
pintar($notas);


//Ordenar por nombre
array_multisort(array_column($notas, 'nombre'), SORT_ASC, $notas);
pintar($notas);

//Nota media del curso
$total = 0;
foreach ($notas as $nota) {
    $total += $nota["nota"];
}
$media = $total / count($notas);
//echo "La media es " . $media;

$media = array_sum(array_column($notas, 'nota')) / count($notas);
echo "La media es " . $media;


//Alumnos suspensos
$contador = 0;
$calificaciones = array_column($notas, 'nota');
foreach ($calificaciones as $calif) {
    if ($calif < 5)
        $contador++;
}

echo "Número de suspensos " . $contador;
