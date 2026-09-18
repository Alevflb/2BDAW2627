<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios</h1>
    <ol>
        <li>Crea un programa que usando una función, muestre tu nombre, tu primer apellido y tu edad, recogiendo todos estos datos con tres parámetros diferentes. La función debe retornar un String</li>
        <li>Declarar dos variables numéricas e imprimir su suma, resta, multiplicación, división y resto.</li>
        <li>Declara dos variables numéricas (random) y comprueba si: 1) el primero es mayor que el segundo 2) ambos son iguales y mayores que 10 3) al menos uno es menor que 100</li>
        <li>Define una constante llamada PHP con el valor "este lenguaje es precioso" e imprime su resultado/valor</li>
        <li>Haz uso de los operando "^" y "**" para dos variables numéricas (por ejemplo 2 y 10). Dada la solución, deduce para qué sirve cada operando.</li>
    </ol>
    <?php
        function misDatos($nombre, $apellido1, $edad){
            return "Me llamo $nombre, $apellido1 y tengo $edad años<br>";
        }
        misDatos("Ale", "Villaba", 90);

    function operaciones($a, $b){
        $suma = $a + $b;
        $resta = $a-$b;
        $mult = $a*$b;
        $div = $a/$b;
        $resto = $a%$b;

        echo "Primer número: $a || Segundo número: $b ------> Suma: $suma --- Resta: $resta --- Multiplicación: $mult --- División: $div --- Resto: $resto <br>";
    }

    operaciones(rand(1,10), rand(1,10));

    echo "<hr><hr><hr><hr><hr><hr>";

    define("PHP", "este lenguaje es maravilloso");
    echo PHP;
    
    echo "<hr><hr><hr><hr><hr><hr>";

    $operacion1 = 2 ** 10;

    $operacion2 = 2^10;

    echo "Resultado de la primera operación = $operacion1 <br> Resultado de la segunda operación = $operacion2";
    ?>


</body>
</html>