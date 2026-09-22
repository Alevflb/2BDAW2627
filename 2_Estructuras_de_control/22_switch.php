<?php
    switch("patata"){
        case "patata":
            echo "patata<br>";
            break;
        case "puerro":
            echo "puerro<br>";
            break;
        default:
            echo "alimento no contemplado<br>";
    }

    // hacer un switch en el que tengamos como valor de entrada un día de la semana en formato strin (por ejemplo "lunes"). Si nos topamos con la cadena lunes, martes, miércoels... viernes, mostraremos por pantalla la cadena "Me encantan los X". Si entra la cadena "finde" mostraremos "VAMOOOOO". Cualquier otra cosa mostrará => "Día de la semana inválido"
    
    $dia = "lunes";
    switch($dia){
        case "lunes":
        case "martes":
        case "miercoles":
        case "jueves":
        case "viernes":
            echo "Me encantan los $dia";
            break;
        case "finde":
            echo "VAMOOOO";
            break;
        default:
            echo "día de la semana inválido";
    }

    // contamos con dos variables enteras. haciendo uso de un switch vamos a imprimir por pantalla lo siguiente: "caso 1" si y solo si la primera variable es mayor o igual a la segunda O la segunda es menor o igual a 2 ||| escribiremos "caso 2" si y solo si la primera variable es menor que la segunda Y la segunda es igual a cinco veces la primera entre dos||| en el resto de casos imprimiremos "no se cumple ninguna condición".

    $a = 1;
    $b = 2.5;

    switch(true){
        case ($a>=$b || $b<=2):
            echo "caso 1";
            break;
        case ($a<$b && $b==($a*5)/2):
            echo "caso 2";
            break;
        default:
            echo "no se cumple nada";
    }

    //COMPROBAR CON UN SWITCH SI UN NÚMERO ALEATORIO DEL 1 AL 1000 ES PAR O IMPAR