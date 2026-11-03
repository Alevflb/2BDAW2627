<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // ejercicio 1
        if(isset($_POST["practica"]) && $_POST["practica"] == "ej1"){
            $unidades = [
                "M" => ["nombre" => "Metro", "símbolo" => "m", "por_metro" => 1],
                "KM" => ["nombre" => "Kilómetro", "símbolo" => "km", "por_metro" => 0.001],
                "MI" => ["nombre" => "Milla", "símbolo" => "mi", "por_metro" => 0.000621371],
                "FT" => ["nombre" => "Pie", "símbolo" => "ft", "por_metro" => 3.28084],
                "IN" => ["nombre" => "Pulgada", "símbolo" => "in", "por_metro" => 39.3701],
            ];
        }
    }
?>