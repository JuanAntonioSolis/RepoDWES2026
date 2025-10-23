<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito IVA</title>
</head>

<body>

    <?php
    $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1),
        array("id" => 1237, "nombre" => "Capsulas Cafe", "precio" => 4.95, "cant" => 2, "iva_r" => 1),
        array("id" => 1238, "nombre" => "Auriculares", "precio" => 19.95, "cant" => 1, "iva_r" => 0)
    );

    echo "<h1>Carrito de la compra</h1>";
    echo "<table border='1'>";

    /*
    
        
    function subtotal($linea_pedido){

        foreach ($linea_pedido as &$item) {
            $subtotal = $item["precio"] * $item["cant"];

            if ($item["iva_r"] == 0) {
                $subtotal *= 1.21;
            } elseif ($item["iva_r" ] == 1){
                $subtotal *= 1.10;
            }

            $item['stotal'] = $subtotal;

        }



    }
    */

    foreach ($carrito as &$linea) {

        $subtotal = $linea["precio"] * $linea["cant"];

        if ($linea["iva_r"] == 0) {
            $subtotal *= 1.21;
        } elseif ($linea["iva_r"] == 1) {
            $subtotal *= 1.10;
        }

        $linea['subtotal'] = $subtotal;

    }
    
    //$item['stotal'] = $subtotal;

    //subtotal($carrito);

    //Pintar carrito
    echo "<tr>";
    foreach ($carrito[0] as $clave => $valor) {
        echo "<th> $clave </th>";
    }
    echo "</tr>";


    foreach ($carrito as $clave => $valor) {
        echo "<tr>";
        foreach ($valor as $item) {
            echo "<td> $item </td>";
        }
        echo "</tr>";
    }

    /*
    echo "<td colspan='5'>". "Total" ."</td>";
    $total = 0;8
    foreach ($carrito as $linea) {
        $total += $linea["subtotal"];
        echo "<td>" . $total . "</td>";
    }
        */    

    echo "</table>";

    print_r($carrito);  

    


    ?>


</body>

</html>