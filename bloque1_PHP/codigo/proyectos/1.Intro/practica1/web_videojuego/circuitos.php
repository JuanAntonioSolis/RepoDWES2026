<?php
require("./header.php")
?>

<h1 class="container text-center">Circuitos</h1>
<div class="container text-center">
    <div class="row">


        <?php

        $tracks = array(
            "track1" => array(
                "modelo" => "Hungaroring",
                "url" => './fotos/hungaroring.png',
                "desc" => "Situada en un valle natural de la campiña húngara, 
                esta pista es fantástica tanto para los pilotos como para el público. 
                Los 4 km de asfalto presentan un trazado variado con múltiples oportunidades de adelantamiento. 
                Aquí, la acción trepidante codo con codo es la norma.",
                "especificaciones" => array("4.381 km", "14 Curvas", "Carga Aerodinámica: Alta", "Hungría")
            ),
            "track2" => array(
                "modelo" => "Suzuka Circuit",
                "url" => './fotos/suzuka1.png',
                "desc" => "Suzuka, que durante décadas ha sido un icono de las competiciones de motor en el Lejano Oriente, 
                es uno de los pocos circuitos en todo el mundo con un trazado en forma de ocho. La recta posterior pasa por 
                encima de la sección delantera por un paso elevado. Dispones de tres trazados sobre este aclamado asfalto.",
                "especificaciones" => array("5.807 km", "17 Curvas", "3 Variantes","Japón")
            ),
            "track3" => array(
                "modelo" => "Brands Hatch Grand Prix",
                "url" => './fotos/brands.png',
                "desc" => "El emblemático circuito Grand Prix se añadió a Brands Hatch en 1960, duplicando la longitud del trazado 
                original de Indy y añadiendo una dimensión extra a un circuito que ya de por sí era todo un reto. Siempre uno de 
                los favoritos de los pilotos, su renombre internacional se forjó gracias a las emocionantes carreras del 
                Campeonato Mundial de Fórmula 1 y del Campeonato Mundial de Automóviles Deportivos. ",
                "especificaciones" => array("3.908 km", "9 Curvas", "Carga Aerodinámica: Media","Inglaterra")
            ),
            "track4" => array(
                "modelo" => "Nordschleife",
                "url" => './fotos/nords.png',
                "desc" => "Nürburgring Nordschleife es la pista de carreras más larga, dura y aterradora que existe en la actualidad. 
                Este "."infierno verde".", como se lo conoce, serpentea a través de las montañas Eifel de Alemania, presentando un 
                conjunto único de desafíos.",
                "especificaciones" => array("20.83 km", "73 Curvas", "Principal Evento: 24 Horas de Nordschleife","Alemania")
            ),
            "track5" => array(
                "modelo" => "Imola",
                "url" => './fotos/imola.png',
                "desc" => "Imola, también conocido como el Autódromo Internazionale Enzo e Dino Ferrari 
                es un circuito de 4,9 km ubicado cerca de Bolonia, Italia. En este circuito con licencia de la 
                FIA de grado 1 se llevan disputando carreras desde hace más de 50 años, 
                incluidas competiciones de Fórmula 1 bajo el nombre de Gran Premio de San Marino.",
                "especificaciones" => array("4.909 km", "20 Curvas", "Escapatorias: Hierba y Grava","Italia")
            ),
            "track6" => array(
                "modelo" => "Red Bull Ring Spielberg",
                "url" => './fotos/a1ring.png',
                "desc" => "Una versión moderna del legendario Österreichring, el Red Bull Ring revive las famosas curvas 
                y añade virajes nuevos al conjunto de desafíos que ofrece una vuelta completa. Las curvas estrechas y 
                las frenadas intensas proporcionan excelentes oportunidades para adelantar.",
                "especificaciones" => array("4.326 km", "10 Curvas", "Escapatorias: Asfalto","Austria")
            ),
            "track7" => array(
                "modelo" => "Circuit Zolder",
                "url" => './fotos/zolder.png',
                "desc" => "Situada en Belgica, esta ondulosa y entretenida pista ha sido escenario de carreras de alto nivel 
                desde su apertura en 1963. Las curvas rápidas y las chicanes bien diseñadas proporcionan multitud de 
                oportunidades para realizar adelantamientos.",
                "especificaciones" => array("4.011 km", "10 Curvas", "Bélgica")
            ),
        );



        foreach ($tracks as $key => $value) {

            echo '<div class="card" style="width: 18rem;">
            <img src="' . $value["url"] . '" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">' . $value["modelo"] . '</h5>
            <p class="card-text">' . $value["desc"] . '</p>
            </div>';

            foreach ($value["especificaciones"] as $spec) {
                echo '<ul class="list-group list-group-flush">
            <li class="list-group-item">' . $spec . '</li>
            </ul>';
            }
            echo '</div>';


        }

        ?>

    </div>
</div>


<?php
require("./footer.php")
?>