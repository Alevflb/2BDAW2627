<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. ARRAY INDEXADO: Recorremos el array a través de las posiciones (empezando desde 0)
    $frutas = ["manzana", "piña", "melocotón", "uva"];
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    var_dump($frutas);
    echo "<br>";

    echo $frutas[9];

    // 2. ARRAY ASOCIATIVO: Recorremos el array a través de claves
    $personas = ["12312323A" => "Ana", "12312323B" => "Paquito", "12312323C" => "Menganito", "12312323D" => "Pedrito"];
    echo $personas["12312323B"];

    $personas["12312323E"] = "Menganita";
    $personas["12312323E"] = "Fulanita";




    // 3. MODIFICAR, AÑADIR Y ELIMINAR
    
    $personas[] = "Lamine";
    $personas[] = "Mikel";
    $personas["12312323X"] = "Messi";
    $personas[] = "CR7";
    array_push($personas, "Iker");

    unset($personas["12312323C"]);
    // unset($personas);
    echo "<pre>";
    print_r($personas);
    echo "</pre>";

    unset($frutas[2]);
    // $frutas[2]="Coco";
    array_push($frutas,"Coco");
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";


    print_r(array_values($frutas));
    $frutas = array_values($frutas); //arreglo el propio array frutas y lo guardo en la misma variable
    for($i = 0; $i<count($frutas);$i++){
        echo "Fruta de la posición $i: ".$frutas[$i]."<br>";
    }
    ?>
</body>
</html>