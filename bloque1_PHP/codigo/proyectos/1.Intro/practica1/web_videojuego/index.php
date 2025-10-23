<?php
require("./header.php")
    ?>


<h1 class="container text-center">Coches</h1>

<div class="container text-center">
    <div class="row">


        <?php

        $coches = array(
            "coche1" => array(
                "modelo" => "Hyundai Elantra TCR",
                "categoria" => "TCR",
                "url" => './fotos/elantra.png',
                "desc" => "Vehículo oficial de la serie TCR World Tour, de las más populares carreras de Turismos. 
        Alrededor de 30 titulos ganados a finales de 2024.",
                "especificaciones" => array("Tracción Delantera", "350hp", "6-Velocidades Cambio Secuencial")
            ),
            "coche2" => array(
                "modelo" => "Audi RS3 LMS TCR",
                "categoria" => "TCR",
                "url" => './fotos/auditcr.png',
                "desc" => "Segunda generación del Audi RS3 LMS para competir en los certámentes de TCR de todo el mundo. 
        Puesto al día en sus detalles con un motor casi de serie.",
                "especificaciones" => array("Tracción Total", "350hp", "430N-m")
            ),
            "coche3" => array(
                "modelo" => "Mazda MX-5 CUP 2019 ND2",
                "categoria" => "MX-5 CUP",
                "url" => './fotos/mx5.png',
                "desc" => "El Mazda MX-5 Cup es un coche de carreras de alto rendimiento diseñado para competir en la serie de carreras Mazda MX-5 Cup. 
        Basado en la icónica plataforma del roadster Mazda MX-5, el coche Cup presenta una serie de modificaciones y mejoras que lo convierten 
        en un formidable competidor en la pista.",
                "especificaciones" => array("Tracción Trasera", "181hp", "Barras estabilizadoras y suspensión ajustable")
            ),
            "coche4" => array(
                "modelo" => "Renault Laguna Super Touring",
                "categoria" => "Super Touring",
                "url" => './fotos/laguna.png',
                "desc" => "El Renault Laguna Supertouring es una berlina preparada para competición, 
        desarrollada conforme a las normativas Super Touring de finales de los años 90. Participó en campeonatos como el BTCC, 
        con un motor atmosférico de 2.0L, caja de cambios secuencial y un paquete aerodinámico diseñado para el rendimiento en pista.",
                "especificaciones" => array("Tracción Delantera", "320hp", "1055kg de peso con el piloto")
            ),
            "coche5" => array(
                "modelo" => "BMW 320i E36 Super Touring",
                "categoria" => "Super Touring",
                "url" => './fotos/bmw.png',
                "desc" => "El BMW 320i E36 Super Touring representó la máxima expresión del equilibrio en las carreras de turismos de los años 90. 
        Su motor receptivo, la tracción trasera y un chasis finamente ajustado ofrecían una armonía perfecta entre agilidad y control. ",
                "especificaciones" => array("Tracción Trasera", "300hp", "Suspensiones de ingenieria McLaren")
            ),
            "coche6" => array(
                "modelo" => "Opel Omega 3000 Evo500",
                "categoria" => "DTM",
                "url" => './fotos/omega.png',
                "desc" => "El Opel Omega 3000 Evo 500 de serie limitada se fabricó para competir en DTM; 
        su motor de 6 cilindros en línea de 3 litros podía impulsarlo hasta una velocidad máxima de 300 km/h.",
                "especificaciones" => array("Tracción Trasera", "365hp", "Velocidad Máxima de 300km/h")
            ),
            "coche7" => array(
                "modelo" => "Mercedes 190E Evo II DTM",
                "categoria" => "DTM",
                "url" => './fotos/evo2.png',
                "desc" => "Conducir el llamativo Mercedes 190E EVO II DTM es tan agradable como contemplarlo. En 1992, Klaus Ludwig consiguió el 
        título en este coche y Ellen Lohr se convirtió en la primera mujer en ganar una carrera de DTM al volante de su 190E.",
                "especificaciones" => array("Tracción Trasera", "340hp", "Caja Manual 5 Velocidades", "ABS")
            ),
        );



        foreach ($coches as $key => $value) {

            echo '<div class="card" style="width: 18rem;">
            <img src="' . $value["url"] . '" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">' . $value["modelo"] . '</h5>

            <h6 class="card-title fw-lighter"> '. $value["categoria"] . '</h6>
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