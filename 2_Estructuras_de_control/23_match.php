<?php
    /**
     * $numero = 2;
     * $var = match($numero){
     *  1 => "Se ha escogido la primera opción",
     *  2 => "Se ha escogido la segunda opción"
     * };
     */

    $diaSemana = "sabado";

    $clases = match($diaSemana){
        "lunes" => "no hay PHP",
        "martes" => "si hay PHP",
        "miercoles" => "no hay PHP",
        "jueves" => "si hay PHP",
        "viernes" => "si hay PHP",
        default => "Día no contemplado"
    };

    echo "Estamos a $diaSemana y hoy $clases<br>";

    // COMPROBAR CON UN MATCH SI UN NUMERO ALEATORIO DEL 3 AL 15 ES PAR O IMPAR. SACAR POR PANTALLA EL RESULTADO DE LA SIGUIENTE FORMA: Crear un párrafo donde aparezca lo siguiente: El número X es impar/par.

    $n = rand(3,15);
    $resto = $n%2;

    $paridad = match($resto){
        0 => "par",
        default => "impar"
    };

    $paridad = match($n%2){
       0 => "par",
        default => "impar"
    };

    echo "numero: $n paridad: $paridad";