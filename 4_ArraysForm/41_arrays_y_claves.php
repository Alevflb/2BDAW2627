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

    // 4. COMPROBAR CLAVES: null y ausencia no es lo mismo
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo "<pre>";
    print_r($personas);
    echo "</pre>";

    $alumno = ["nombre" => "Pablo", "nota" => null, "grupo" => null];

    var_dump(isset($alumno["nota"])); // false: isset exige un valor distino de null 
    var_dump(array_key_exists("nota", $alumno)); // true: pq aunque no tengamos un valor todavía, la clave si existe
    echo $alumno["grupo"] ?? "Sin grupo";  // ?? se le llama el operado de fusión nulo y sirve para poner un valor por defecto a una cadena o a un echo en caso de que la primera opción no exista

    echo "<br>";

    // 5. COMPARACIÓN: no confundir con orden de inserción, claves y tipos

    $a = ["uno" => 1, "dos" => 2];
    $b = ["dos" => 2, "uno" => 1];

    var_dump($a == $b); //true pq tiene las mismas asociaciones clave-valor
    var_dump($a === $b); //false pq tienen distinto orden de inserción

    var_dump([1,2] === ["1", "2"]);
    ?>
</body>
</html>