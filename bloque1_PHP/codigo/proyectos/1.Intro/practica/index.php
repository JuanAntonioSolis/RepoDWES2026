<?php
include_once("./cabecera.php");
?>

<div class="col-md-8 themed-grid-col">
    <div class="flex-shrink-0 p-3 bg-white">

        <div class="container text-center">
            <div class="row">

                <?php

                $jugadores = array(
                    "jugador1" => array("nombre" => "Barbaro", "vida" => 100, "url" => './img/barbaro.png', "desc" => "Da ostias como panes"),
                    "jugador2" => array("nombre" => "Mago", "vida" => 80, "url" => './img/mago.png', "desc" => "Echa rayos por el ...")
                );

                foreach ($jugadores as $clave => $valor) {
                    echo '<div class="col">';

                    echo '<div class="card" style="width: 18rem;">
                    <img src="' . $valor["url"] . '" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">' . $valor["nombre"] . '</h5>
                        <p class="card-text">Vida: ' . $valor["vida"] . '</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>
                    </div>';

                    echo '</div>';
                }

                ?>

            </div>
        </div>

    </div>
</div>
</div>


<?php
include_once("./pie.php");
?>