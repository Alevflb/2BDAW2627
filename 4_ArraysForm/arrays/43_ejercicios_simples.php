<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <p>La biblioteca del insti tiene estos libros: "El Quijote", "1984", "Dune", "El perfume"</p>
    <ol>
        <li>Crear la función "unirConComas($array)", que devuelva un texto con todos los valores separados por ", " (sin coma al final).</li>
        <li>Añade el "Momo", "Drácula" y "La Celestina" al final de la biblioteca</li>
        <li>Se piden prestados los libros "Dune" y "Hamlet". Para cada petición, hay que buscar la posición del libro. Si el libro está en la biblioteca lo vamos a eliminar del array y sacaremos por pantalla el mensaje "Prestado: Dune". Si no tenemos el libro sacamos en el navegador "No disponible". En el caso de cargarnos un libro, tenemos que reestructurar el array para que no haya posiciones que existan.</li>
        <li>Mostrar una lista numerada con todos los libros, el total de libros que hay y, en una lista no ordenada todos los libros de la biblioteca en orden alfabético inverso (de la Z a la A)</li>
    </ol>

    <?php
        $biblioteca  = ["Quijote", "1984", "Dune", "El perfume"];
        array_push($biblioteca, "Momo", "Drácula", "La celestina");
        //$biblioteca[] = "Momo";

        $peticiones = ["Dune", "Hamlet", "El perfume"];
        
        foreach($peticiones as $titulo){
            if(in_array($titulo, $biblioteca)){  //in_array lo uso para saber si está
                for($i = 0; $i<count($biblioteca); $i++){
                    if($titulo == $biblioteca[$i]){
                        unset($biblioteca[$i]);
                        echo "Prestado: $titulo";
                    }
                }
                // $posicion = array_search($titulo, $biblioteca); //en el caso en el que esté, saco su posición
                // unset($biblioteca[$posicion]);
                // echo "Prestado: $titulo";
            }else{
                echo "No disponible";
            }
        }
        echo "<pre>";print_r($biblioteca);echo "</pre>";
        $biblioteca = array_values($biblioteca); //para "arreglar" el array con las posiciones ordenadas
        echo "<pre>";print_r($biblioteca);echo "</pre>";


        echo "<ol>";
        for($i=0;$i<count($biblioteca);$i++){
            echo "<li>".$biblioteca[$i]."</li>";
        }
        echo "</ol>";

        function unirConComas($array):string{
            $solucion = "";
            $primero = true;
            foreach($array as $elemento){
                if($primero){
                    $solucion .= $elemento;
                    $primero = false;
                }else{
                    $solucion .= ", ".$elemento;
                }
                
            }
            return $solucion;
        }

        echo unirConComas($biblioteca);
        $copia = $biblioteca;
        rsort($copia);
        echo "<pre>";print_r($copia);echo "</pre>";
        echo unirConComas($copia);
    ?>
    <h3>Ejercicio 2</h3>
    <p>
        Una tienda informática que guarda su stock en un array asociativo producto->unidades:
            teclado 12, raton 0, monitor 5, webcam 3, altavoz 0.
    </p>
    <ul>
        <li>Crear el array asociativo con el stock original</li>
        <li>Crear una función llamda estadoStock(unidades), que devuelva "Agotado" (0), "Pocas unidades" (1 a 3) y "Disponible" (más de 3)</li>
        <li>Llega un pedido de reposición: 10 ratones, 2 webcams, 7 micrófono. Suma las cantidades a los productos existentes. Si el producto no existía, añadirlo al array del stock de la tienda e indícalo con un echo. Ángel</li>
        <li>Se registran ventas:  Teclado 4, altavoces 1, monitor 5. Vamos a quitar de stock esas ventas solo si hay unidades suficientes y sino, muestra "Sin stock suficiente de altavoces"</li>
        <li>Muestra una tabla con producto, unidades y estado. Después muestra el total de unidades, el producto con más unidades y la lista de productos agotados (un producto está agotado cuando el número de unidades es cero)</li>
    </ul>

    <?php
        $stock = ["teclado" => 12, "raton" => 0, "monitor" => 5, "webcam" => 3, "altavoz" => 0];
        function estadoStock(int $unidades):string{
            return match($unidades){
                0 => "Agotado",
                1,2,3 => "Pocas unidades",
                default => "Disponible"
            };
        }
        
        $reposicion = ["raton" => 10, "webcam" => 2, "microfono" => 7];
        function reponer(array $stock, array $reposicion): array{
            foreach($reposicion as $nombre => $unidades){
                if(isset($stock[$nombre])) { // si existe en el array stock un valor para la clave $nombre, recordad que nombre son las claves del array reposicion, por tanto, estoy buscando si en stock hay claves que tb están en reposición
                    $stock[$nombre] = $stock[$nombre] + $unidades;
                }else{ //si me meto en este else significa que en stock no tengo un valor asociado a la clave nombre. por tanto, voy a crear un nuevo elemento clave->valor dentro de stock con lo que me ha llegado desde reposicion
                    $stock[$nombre] = $unidades;
                    echo "<p>Nuevo producto: $nombre</p>";
                }
            }
            return $stock;
        }

        echo "<pre>";print_r($stock);echo "</pre>";

        $stock = reponer($stock, $reposicion);

        echo "<pre>";print_r($stock);echo "</pre>";

        $ventas = ["teclado" => 4, "altavoz" => 1, "monitor" => 5];

        function vender($orig, $nuevo){
            foreach($nuevo as $nombre => $cant){
                if(isset($orig[$nombre]) && $orig[$nombre] >= $cant){
                    $orig[$nombre] -= $cant;
                }else{
                    echo "Sin stock suficiente de: $nombre";
                }
            }
            return $orig;
        }
        echo "<pre>";print_r($stock);echo "</pre>";
        $stock = vender($stock, $ventas);
        echo "<pre>";print_r($stock);echo "</pre>";
    
        function mostrar($stock){
            $total = 0;
            $masUnidades = "";
            $agotados = [];
    ?>
    <table border="">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Unidades</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($stock as $nombre => $unidades){
            ?>
            <tr>
                <td><?= $nombre; ?></td>
                <td><?= $unidades; ?></td>
                <td><?= estadoStock($unidades) ?></td>
            </tr>
            <?php
                $total += $unidades;
                if($masUnidades == "" || $unidades > $stock[$masUnidades]) $masUnidades = $nombre;
                if($unidades == 0) array_push($agotados, $nombre);
            }
            ?>
        </tbody>
    </table>
    <?php
        echo "El total del productos es: $total y el producto con más unidades es: $masUnidades";
    ?>
    <ol>
        <?php
        for($i = 0; $i<count($agotados); $i++){
            echo "<li>".$agotados[$i]."</li>";
        }
        ?>
    </ol>
    <?php
        }

        mostrar($stock);
    ?>
</body>
</html>