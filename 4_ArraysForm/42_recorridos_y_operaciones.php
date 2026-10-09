<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $notas = ["Paquito" => 2, "Samu" => 4, "Pablo" => 1, "Juan Antonio" => 4]; // crear un array asociativo donde las claves sean los nombres de los alumnos y los valores sean sus notas en la práctica de PHP de ayer. Crear 6 elementos del array. Recorrer el array y sumarle a todo el mundo excepto a Juan Antonio un punto
        foreach($notas as $clave => $valor){
            if($clave!= "Juan Antonio") $valor++;
            echo "Alumno: $clave, Nota: $valor<br>";
        }

        $notas2 = [3, 1, 2, 9, 7];

        // ORDENACIÓN DE ARRAYS
        $notas["Alberto"] = 10;
        print_r($notas);

        $copia = $notas;
        sort($copia); // Ordena por valor de menor a mayor eliminando claves (en el caso de usar un array asociativo) y sustiyendolas por posiciones
        echo "<pre>sort: ";print_r($copia);echo "</pre>";

        $copia = $notas;
        rsort($copia); // Ordena por valor de mayor a menor eliminando claves (en el caso de usar un array asociativo) y sustiyendolas por posiciones
        echo "<pre>rsort: ";print_r($copia);echo "</pre>";

        $copia = $notas;
        asort($copia); // Ordena por valor de menor a mayor respetando las claves
        echo "<pre>asort: ";print_r($copia);echo "</pre>";

        $copia = $notas;
        arsort($copia); // Ordena por valor de mayor a menor respetando las claves
        echo "<pre>arsort: ";print_r($copia);echo "</pre>";

        $copia = $notas;
        ksort($copia); // 
        echo "<pre>ksort: ";print_r($copia);echo "</pre>";

        $copia = $notas;
        krsort($copia); // 
        echo "<pre>krsort: ";print_r($copia);echo "</pre>";

        // Funciones de búsqueda y de extracción
        $numeros = [10, 20, 30, 20, 10, 10];
        echo in_array(20, $numeros); //in_array() sirve para buscar elementos dentro de un array, devuelve un booleano

        var_dump(array_search(11, $numeros));
        echo "<br>";

        $trozo = array_slice($numeros, 2, 5);
        print_r($trozo);

        //RECORDADME Q DESPUÉS OS PONGA LAS FUNCIONES PARA PASAR DE STRING A ARRAY Y DE ARRAY A STRING CON SEPARADORES
    ?>
</body>
</html>