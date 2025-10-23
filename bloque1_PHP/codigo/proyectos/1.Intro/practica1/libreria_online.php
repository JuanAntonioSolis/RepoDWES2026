<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Online</title>
    <style>
        .tarj {
            width: 200px;
            background-color: lightblue;
            border: 1px solid black;

        }

        td{
            padding: 20px;
            
        }
    </style>
</head>

<body>

    <h1>LIBRERIA JAROSO</h1>



    <?php
    $categoria = ["ciencias", "cocina", "deporte", "novela", "historia", "scifi", "negra", "romantica"];
    $num_random = rand(0, 7);
    $libreria = array(
        "Libro1" => array(
            "ISBN" => "1234567891234",
            "titulo" => "Por si un día volvemos",
            "descripcion" => "En esta ciudad africana de origen árabe,
            pulso español y administración francesa desembarca una joven con el falso nombre de Cecilia Belmonte.
            En apariencia, ha cruzado el Mediterráneo para escapar de la miseria, como tantos compatriotas.
            Su razón, sin embargo, es más turbia.",
            "categoria" => "Historia",
            "editorial" => "Planeta",
            "foto" => './imgs/1234567891234.jpg',
            "precio" => 12.99
        ),
        "Libro2" => array(
            "ISBN" => "1234567891235",
            "titulo" => "El círculo de los días",
            "descripcion" => "La historia entrelaza amor, traición y conflicto social entre tribus
            enfrentadas por la sequía, la religión y el poder, 
            mientras el proyecto para construir un círculo de piedras une a las diferentes comunidades.",
            "categoria" => "Historia",
            "editorial" => "Plaza & Janes",
            "foto" => './imgs/1234567891235.jpg',
            "precio" => 23.65
        ),
        "Libro3" => array(
            "ISBN" => "1234567891236",
            "titulo" => "Los tres mundos",
            "descripcion" => "La historia sigue a Lorién, un joven español que, tras una ardua travesía, 
            se embarca en la búsqueda de fortuna en California, donde encontrará una aventura de amor, 
            lealtad, amistad y supervivencia en un territorio salvaje y lleno de oportunidades. ",
            "categoria" => "Historia",
            "editorial" => "B",
            "foto" => './imgs/1234567891236.jpg',
            "precio" => 22.70
        ),
        "Libro4" => array(
            "ISBN" => "1234567891237",
            "titulo" => "Corazón de oro",
            "descripcion" => "La historia entrelaza amor, traición y conflicto social entre tribus
            enfrentadas por la sequía, la religión y el poder, 
            mientras el proyecto para construir un círculo de piedras une a las diferentes comunidades. ",
            "categoria" => "Historia",
            "editorial" => "Planeta",
            "foto" => './imgs/1234567891237.jpg',
            "precio" => 22.70
        ),
        "Libro5" => array(
            "ISBN" => "1234567891238",
            "titulo" => "Águila negra",
            "descripcion" => "Una novela histórica fascinante que explora la vida de tres mujeres de 
            clases sociales diferentes en una fábrica de papeles pintados en el convulso contexto histórico 
            de la Revolución Francesa.",
            "categoria" => "Historia",
            "editorial" => "Grijalbo",
            "foto" => './imgs/1234567891238.jpg',
            "precio" => 23.65
        ),
        "Libro6" => array(
            "ISBN" => "1234567891239",
            "titulo" => "El susurro del fuego",
            "descripcion" => "dos hermanos mellizos, Mario y Laura, que viajan a las Islas Canarias. 
            Cuando Mario sufre una recaída y es hospitalizado, descubre que Laura ha desaparecido en una zona volcánica, 
            lo que desencadena una carrera contrarreloj para encontrarla. La trama combina suspense, drama familiar 
            y misterio en un escenario con paisajes volcánicos.",
            "categoria" => "Negra",
            "editorial" => "Suma",
            "foto" => './imgs/1234567891239.jpg',
            "precio" => 21.75
        ),
        "Libro7" => array(
            "ISBN" => "1234567891240",
            "titulo" => "El último secreto",
            "descripcion" => " Langdon debe desentrañar enigmas en la ciudad para encontrarla, 
            enfrentándose a una poderosa organización y descubriendo un secreto que podría cambiar la 
            comprensión de la mente humana. Es un thriller de acción con elementos de ciencia, conspiración y misterio histórico.",
            "categoria" => "Negra",
            "editorial" => "Planeta",
            "foto" => './imgs/1234567891240.jpg',
            "precio" => 23.65
        ),
        "Libro8" => array(
            "ISBN" => "1234567891241",
            "titulo" => "La caza del ejecutor",
            "descripcion" => "Novela de espionaje de Vicente Vallés sobre un operativo secreto del Kremlin para 
            eliminar a un desertor ruso, Mijaíl Serkin, y a cualquiera que sepa de un plan que podría llevar a Europa al 
            borde de la guerra. Agentes del CNI y la CIA deben cazar al asesino sin rostro antes de que continúe la campaña de limpieza global.",
            "categoria" => "Negra",
            "editorial" => "Espasa",
            "foto" => './imgs/1234567891241.jpg',
            "precio" => 21.75
        ),
        "Libro9" => array(
            "ISBN" => "1234567891242",
            "titulo" => "La profesora",
            "descripcion" => "Thriller psicológico sobre una profesora de secundaria, Eve, cuya vida aparentemente perfecta se ve sacudida por 
            los secretos de una antigua alumna, Addie. La historia gira en torno a un escándalo pasado entre un profesor y Addie, 
            y cómo el pasado vuelve para atormentar a todos los implicados, aunque la verdad es más compleja de lo que parece.",
            "categoria" => "Negra",
            "editorial" => "Suma",
            "foto" => './imgs/1234567891242.jpg',
            "precio" => 19.85
        ),
        "Libro10" => array(
            "ISBN" => "1234567891243",
            "titulo" => "Misterio con aroma a canela",
            "descripcion" => "Killmore donde la protagonista, Nia, regresa a su pueblo natal, Cinnamon Falls, 
            para superar una ruptura, pero se ve envuelta en una investigación de asesinato que ocurre justo antes del festival anual. 
            Para descubrir al culpable, debe unirse con viejos vecinos, incluido su exnovio. ",
            "categoria" => "Negra",
            "editorial" => "Newton Compton Editores",
            "foto" => './imgs/1234567891243.jpg',
            "precio" => 12.25
        ),
        "Libro11" => array(
            "ISBN" => "1234567891244",
            "titulo" => "El valor de la intuición",
            "descripcion" => "La intuición es una capacidad para tomar decisiones rápidas y correctas basada en la información 
            inconsciente que el cerebro procesa constantemente, a menudo manifestada como una corazonada o sensación. 
            El libro proporciona herramientas para desarrollar esta habilidad, que se alimenta de la experiencia y las sensaciones, 
            para mejorar la vida personal y profesional.",
            "categoria" => "Ciencia",
            "editorial" => "Editorial Ariel",
            "foto" => './imgs/1234567891244.jpg',
            "precio" => 18.90
        ),
        "Libro12" => array(
            "ISBN" => "1234567891245",
            "titulo" => "Historia del cero",
            "descripcion" => "Ensayo de divulgación ambicioso y polifacético
            que explora la evolución del símbolo del vacío el cero desde su 
            invisibilidad en las culturas antiguas hasta su centralidad en el mundo digital.",
            "categoria" => "Ciencia",
            "editorial" => "Pinolia",
            "foto" => './imgs/1234567891245.jpg',
            "precio" => 23.70
        ),
        "Libro13" => array(
            "ISBN" => "1234567891246",
            "titulo" => "Cuando ellos se van",
            "descripcion" => "Rinde un emotivo homenaje a las mascotas, en especial a su perro Argos, explorando el duelo 
            y el amor hacia estos animales a través de la literatura, el arte, el cine y la historia. Es un libro sobre el proceso 
            de despedirse de un compañero fiel y generoso.",
            "categoria" => "Ciencia",
            "editorial" => "Plaza & Janes",
            "foto" => './imgs/1234567891246.jpg',
            "precio" => 20.80
        ),
        "Libro14" => array(
            "ISBN" => "1234567891247",
            "titulo" => "El cisne negro",
            "descripcion" => "¿Que es un cisne negro? Un hechoáimprobable, impredecible y deáconsecuencias imprevisibles.
            Un cisne negro es un hecho improbable, cuyas consecuencias son importantes y todas las explicaciones que se 
            puedan ofrecer a posteriori no tienen en cuenta el azar y sólo buscan encajar lo imprevisible en un modelo perfecto.",
            "categoria" => "Ciencia",
            "editorial" => "Booket",
            "foto" => './imgs/1234567891247.jpg',
            "precio" => 13.30
        ),
        "Libro15" => array(
            "ISBN" => "1234567891248",
            "titulo" => "Neurohábitos",
            "descripcion" => "El libro ofrece una perspectiva única sobre la neurociencia aplicada: el libro combina la 
            neurociencia con la psicología organizacional y el rendimiento humano. Nos enseña cómo la neuroplasticidad puede ayudarnos 
            a reprogramar nuestro cerebro para alcanzar el bienestar. El Hábitos atómicos de la neurociencia.",
            "categoria" => "Ciencia",
            "editorial" => "Diana Editorial",
            "foto" => './imgs/1234567891248.jpg',
            "precio" => 18.90
        )
    );

    $libros_historia = [];
    $libros_negra = [];

    foreach ($libreria as $libro) {
        if ($libro["categoria"] == "Historia") {
            $libros_historia[] = $libro;
        }

        if ($libro["categoria"] == "Negra") {
            $libros_negra[] = $libro;
        }
    }


    echo '<table>';
    echo '<h2 style="color:lightblue">Novela Histórica</h2>';
    echo '<tr>';
    foreach (array_slice($libros_historia,0,4) as $libro) {
        
        echo '<td> <img src="' . $libro["foto"] . '" width=200px>';
        echo '<hr>';
        echo '<p>' . $libro["descripcion"] . ' </p>';
        echo '<h3>' . $libro['titulo'] . '</h3>';
        echo '<p style="color: red">' . $libro['precio'] . ' €</p> </td>';
        
    }

    echo '</tr>';
    echo '<tr>';
    foreach (array_slice($libros_negra,0,4) as $libro) {
        
        echo '<td> <img src="' . $libro["foto"] . '" width=200px>';
        echo '<hr>';
        echo '<p>' . $libro["descripcion"] . ' </p>';
        echo '<h3>' . $libro['titulo'] . '</h3>';
        echo '<p style="color: red">' . $libro['precio'] . ' €</p> </td>';
        
    }
    echo '</tr>';
    echo '</table>';
    ?>

</body>

</html>