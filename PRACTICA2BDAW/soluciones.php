<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    ?>
</head>
<body>
    <?php
    //print_r($_POST);
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //los dos ejercicios van dentro de este if

        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej1"){
            $planetas = [
                "tierra"  => ["nombre" => "Tierra",  "icono" => "🌍", "gravedad" => 9.81],
                "luna"    => ["nombre" => "Luna",    "icono" => "🌙", "gravedad" => 1.62],
                "marte"   => ["nombre" => "Marte",   "icono" => "🔴", "gravedad" => 3.71],
                "jupiter" => ["nombre" => "Júpiter", "icono" => "🪐", "gravedad" => 24.79]
            ];

            $peso = $_POST["peso"];
            $origen = $_POST["origen"];
            $destino = $_POST["destino"];

            $factor = $planetas[$destino]["gravedad"] / $planetas[$origen]["gravedad"];

            $resultado = round($peso * $factor,2);

            echo "<h3>Si en ".$planetas[$origen]["icono"]." ".$planetas[$origen]["nombre"]." pesas $peso kg, en ".$planetas[$destino]["icono"]." ".$planetas[$destino]["nombre"]." pesarías $resultado kg </h3>";
        }

        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej2"){
            $nombreEquipo = $_POST["equipo"];
            $equipos = [
                "leones"    => ["nombre" => "Leones FC",      "ganados" => 5, "empatados" => 2, "perdidos" => 1, "gf" => 15, "gc" => 7],
                "aguilas"   => ["nombre" => "Águilas United", "ganados" => 5, "empatados" => 2, "perdidos" => 1, "gf" => 13, "gc" => 8],
                "tiburones" => ["nombre" => "Tiburones CF",   "ganados" => 4, "empatados" => 3, "perdidos" => 1, "gf" => 12, "gc" => 6],
                "osos"      => ["nombre" => "Osos Athletic",  "ganados" => 3, "empatados" => 2, "perdidos" => 3, "gf" => 9,  "gc" => 9],
                "lobos"     => ["nombre" => "Lobos SD",       "ganados" => 3, "empatados" => 2, "perdidos" => 3, "gf" => 10, "gc" => 11],
                "halcones"  => ["nombre" => "Halcones CD",    "ganados" => 1, "empatados" => 1, "perdidos" => 6, "gf" => 7,  "gc" => 14],
                "toros"     => ["nombre" => "Toros RC",       "ganados" => 0, "empatados" => 2, "perdidos" => 6, "gf" => 6,  "gc" => 17]
            ];

            foreach($equipos as $clave => $equipo){
                //$equipo["puntos"] = $equipo["ganados"]*3 + $equipo["empatados"];
                $equipos[$clave]["puntos"] = $equipo["ganados"]*3 + $equipo["empatados"];
                $equipos[$clave]["dif"] = $equipo["gf"]-$equipo["gc"];
                // echo "CLAVE ==> $clave <br> SUBARRAY DEL EQUIPO $clave ====>";
                // echo $equipos[$clave]["nombre"];
                // echo "<br>";
            }

            //echo "<pre>"; print_r($equipos); echo "</pre>";

            $columnaPuntos = array_column($equipos, "puntos");
            $columnaDiferencia = array_column($equipos, "dif");
            array_multisort($columnaPuntos, SORT_DESC, $columnaDiferencia, SORT_DESC, $equipos);


            // print_r($equipos);

        ?>
        <table style="width: 100%;" cellpadding="15" border="">
            <tr>
                <th>Pos</th>
                <th>Equipo</th>
                <th>Ganados</th>
                <th>Empatados</th>
                <th>Dif Goles</th>
                <th>Ptos</th>
            </tr>
            <?php
            $pos = 1;
            foreach($equipos as $clave => $equipo){
                $fondo = "white";
                if($nombreEquipo == $clave){
                    $fondo = "yellowgreen";
                    $miEquipoPos = $pos;
                    $miEquipoNombre = $equipo["nombre"];
                    $miEquipoPtos = $equipo["puntos"];
                }
            ?>
            <tr style="background-color: <?= $fondo ?>;">
                <td><?= $pos ?></td>
                <td><?= $equipo["nombre"] ?></td>
                <td><?= $equipo["ganados"] ?></td>
                <td><?= $equipo["empatados"] ?></td>
                <td><?= $equipo["dif"] ?></td>
                <td><?= $equipo["puntos"] ?></td>
            </tr>

            <?php
            $pos++;
            }

            ?>
        </table>

<?php
        echo "<p>Tu equipo, $miEquipoNombre, va en la posición $miEquipoPos con $miEquipoPtos puntos </p>";
        }
    }
    ?>
</body>
</html>