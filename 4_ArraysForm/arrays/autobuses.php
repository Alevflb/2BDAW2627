<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $autobuses = [
        ["Málaga", "Ronda", 90, 10],
        ["Churriana", "Málaga", 20, 3],
        ["Málaga", "Granada", 120, 15],
        ["Torremolinos", "Málaga", 30, 3.5]
    ];
    $autobuses[] = ["Marbella", "Torremolinos", 20, 5];
    $autobuses[] = ["Granda", "Alhaurín", 140, 50];

    function tabla($columna, $orden){
        global $autobuses;

        // pa ordenar esto, necesito si o si la función array_multisort pero para llegar ello necesito primero sacar los datos de la columna que sea entera en formato array. Por ello, antes de usar array_multisort necesito --> array_column()

        $columnaArray = array_column($autobuses, $columna);

        array_multisort($columnaArray, $orden, $autobuses);

    ?>

    <table>
        <tr>
            <th>Origen</th>
            <th>Destino</th>
            <th>Duración</th>
            <th>Precio</th>
            <th>Tipo</th>
        </tr>
    <?php
    foreach($autobuses as $viaje){
        $precio = $viaje[3]; // forma 1: pintando desde la etiqueta tr
        $color = match(true){
            $precio < 10 => "blue",
            $precio < 14 => "lightyellow",
            default => "red"
        };
        echo "<tr style = 'background-color:$color' >";
        //$precio = $viaje[3];
        foreach($viaje as $datos){
            echo "<td>$datos</td>";
        }
        $duracion = $viaje[2];
        
        // $viaje[2] ==> Para sacar la duracion del viaje
        // $viaje[3] ==> Para sacar el precio del viaje

        $tipo = match(true){
            $duracion <= 30 => "Corta distancia",
            30 < $duracion && $duracion <= 120 => "Media distancia",
            default => "Larga distancia"
        };

        echo "<td>$tipo</td>";

        // switch(true){
        //     case $duracion <= 30:
        //         echo "<td>Corta distancia</td>";
        //         break;
        //     case ...:
        //         echo "<td>Media distancia</td>";
        //         break;
        //     default:
        //         echo "<td>Larga distancia</td>";
        // }
        echo "</tr>";
    }
    ?>
    </table>
    <?php
    }

    tabla(3,SORT_DESC);
    ?>
</body>
</html>