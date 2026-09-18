<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción</title>
</head>
<body>
    <?php

    echo "<p>Hola mundo</p>";
    
    echo "<p>Me encanta PHP!</p>";

    ?>
    <!-- Parte estática de mi web -->
    <h1>Esto es una intro de mi maravilloso lenguaje de programación</h1>
    <p>Este texto es puro HTML, por lo tanto es SIEMPRE estático</p>
    <hr>
    <?php
        $salto = "<br>";
        // Parte dinámica con variables y funciones
        $lenguaje = "JavaScript";
        $ciclo = 'DAW';
        echo "El lenguaje favorito de todos los niños es: $lenguaje$salto";
        echo "El lenguaje favorito de todos los niños es: ".$lenguaje.$salto;

        //Parte dinámica con una función del servidor
        echo "El recreo es a las 11:30 y todavía son las: ".$salto;
        $fecha = date("d/m/Y H:i:s"); 
        echo $fecha;

        //ESTO ES INCORRECTO, SIEMPRE BARRABAJA O CARACTER PARA EMPEZAR A NOMBRAR/DECLARAR UNA VARIABLE
        //$1var = "hola";
        $var1 = "hola";
        $_1var = "hola";
    ?>
</body>
</html>
