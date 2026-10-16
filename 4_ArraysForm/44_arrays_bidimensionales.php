<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // un array bidimensional es aquel en el que cada elemento del array principal contiene otro array.
    $videojuegos = [
        ["Silksong", "Metroidvania", 30],
        ["Elden ring", "Souls", 70],
        ["FIFA 27", "Deporte", 120],
        ["DS III", "Souls", 40]
    ];

    //echo $videojuegos[0][0]; //Para sacar el nombre del primer juego
    // $juegoNuevo = ["Cyberpunk", "RPG", 60];

    // $videojuegos[] = $juegoNuevo;

    $videojuegos[] = ["Cyberpunk", "RPG", 60];
    ?>

    <table>
        <?php 
        foreach($videojuegos as $fila){
            echo "<tr>";
            foreach($fila as $elemento){
                echo "<td>$elemento</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
        //funcion list() => la usaremos si conocemos la estructura del array y es un array indexado, sino, no podemos usarlo
        foreach($videojuegos as $juego){
            list($nombreJuego, $categoriaJuego, $precio) = $juego;
            echo "<p>$nombreJuego: $categoriaJuego y cuesta $precio</p>";
        }

        //sacar las categorías de todos los juegos y guardarlo en un array
        $categorias = [];
        foreach($videojuegos as $juego){
            list($nombreJuego, $categoriaJuego, $precio) = $juego;

            $categorias[] = $juego[1];
            $categorias[] = $categoriaJuego;
        }
        print_r($categorias);

        $categorias = array_column($videojuegos, 1); //sirve para sacar la columna de la posicion i de un array bidimensional (SIEMPRE Y CUANDO EL ARRAY SEA INDEXADO, CUIDAO CON LOS ASOCIATIVOS!!!)
        $precios = array_column($videojuegos, 2);

        array_multisort($categorias, SORT_ASC, $precios, SORT_DESC, $videojuegos);
        echo "<pre>";print_r($videojuegos);echo "</pre>";


        $personas = [
            "Ana" => ["dni" => "12341234A", "edad" => 50],
            "Paco" => ["dni" => "12341234B", "edad" => 67],
            "Sofía" => ["dni" => "12341234C", "edad" => 18]
        ];

        foreach($personas as $nombre => $datos){
            echo "<h3>$nombre</h3>";
            foreach($datos as $tipoDato => $dato){
                echo "$tipoDato: $dato <br>";
            }
        }

    ?>
</body>
</html>