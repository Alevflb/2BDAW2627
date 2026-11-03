<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $unidades = [
            "M"  => ["nombre" => "Metro",      "simbolo" => "m",  "por_metro" => 1],
            "KM" => ["nombre" => "Kilómetro",  "simbolo" => "km", "por_metro" => 0.001],
            "MI" => ["nombre" => "Milla",      "simbolo" => "mi", "por_metro" => 0.000621371],
            "FT" => ["nombre" => "Pie",        "simbolo" => "ft", "por_metro" => 3.28084],
            "IN" => ["nombre" => "Pulgada",    "simbolo" => "in", "por_metro" => 39.3701]
        ];

        // uso isset para los campos de la lista desplegable y de los radios pq si no se escoge ninguna opción, no llega ningún valor (ni siquiera se manda la clave "destino" ni "origen")
        // si por ejemplo cantidad se envía sin rellenar me llega una cadena vacía "" por lo que no peta nada :)
        $cantidad = $_POST["cantidad"];
        $origen = isset($_POST["origen"]) ? $_POST["origen"] : "";
        $destino = isset($_POST["destino"]) ? $_POST["destino"] : "";


        // ningún factor está escrito a mano: sale de "por_metro" de las dos unidades elegidas
        $factor = $unidades[$destino]["por_metro"] / $unidades[$origen]["por_metro"];
        $resultado = $cantidad * $factor;

        // round(numerito, cuantos decimales usas) Sirve para redondear los decimales de un número (sencillo)
        echo "<h2>$cantidad ".$unidades[$origen]["simbolo"]." = ".round($resultado, 2)." ".$unidades[$destino]["simbolo"]."</h2>";
        echo "<p>1 $origen = ".round($factor, 6)." $destino</p>";
    ?>
        <h3><?= $cantidad; ?> <?= $origen; ?> en el resto de unidades</h3>
        <table border="">
            <tr>
                <th>Unidad</th>
                <th>Valor</th>
            </tr>
            <?php
            foreach($unidades as $codigo => $unidad){
                if($codigo != $origen){ // pa no que en la tabla de equivalencias no me salga la unidad original 
            ?>
            <tr>
                <td><?= $codigo; ?> - <?= $unidad["nombre"]; ?></td>
                <td><?= round($cantidad * $unidad["por_metro"] / $unidades[$origen]["por_metro"], 2); ?> <?= $unidad["simbolo"]; ?></td> <!-- Este es el cálculo de la equivalencia entre unidades -->
            </tr>
            <?php
                }
            }
            ?>
        </table>
        <h3>Tabla de equivalencias (fila = origen, columna = destino)</h3>
        <table border="">
            <tr>
                <th></th>
                <?php
                foreach($unidades as $codigo => $unidad){// para la primera columna 
                    echo "<th>$codigo</th>";
                }
                ?>
            </tr>
            <?php
            foreach($unidades as $filaOrigen => $datosOrigen){ // CUIDADO PORQUE AQUÍ ESTÁ LA TRAMA DEL EJERCICIO!!!!!!!!!!!!!!!!
                echo "<tr><th>$filaOrigen</th>";
                foreach($unidades as $columnaDestino => $datosDestino){ // si os fijáis, estoy recorriendo unidades dos veces por separado, aunque sean foreach anidados, el segundo empieza a recorrer desde cero unidades, por qué? sencillo, necesito recorrerlo una vez para los datos de la unidad de origen y otra segunda vez para obtener los datos del destino y así calculo el factor. Esto es lo difícil de este ejercicio!! 
                    // el factor se calcula al pintar la celda, no hace falta guardarlo en ningún array
                    $valor = $datosDestino["por_metro"] / $datosOrigen["por_metro"];
                    // resalto la celda de la conversión que acabo de hacer
                    ($filaOrigen == $origen && $columnaDestino == $destino) ? $color = "yellow" : $color = "white"; // esto es un ternario, se puede hacer con el típico if/else de toda la vida o solo con un if fila origne == origen y filadestino == destino color = yellow y no pones ni else ni nada
                    echo "<td style='background-color: $color;'>".round($valor, 6)."</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    <?php  
    ?>
        <a href="formulario.html">VOLVER</a>
    <?php
    }else{
        echo "<p style='background-color:red'>No ha llegado ningún formulario. <a href='PRACTICAR_formularios.html'>Ir al ejercicio</a></p>";
    }
    ?>
</body>
</html>
