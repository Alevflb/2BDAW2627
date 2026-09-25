<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tema 3</h1>
    <p>Un bucle repite un código una serie de veces, dependiendo de una condición, normalmente esa condición está condicionada por una/s variable de iteración</p>
    <?php
        // WHILE: MIENTRAS SE CUMPLA LA CONDICIÓN
        // Pensar en 3 cosas: dónde empiezo, cuándo sigo y qué cambia

        // La condición se comprueba ANTES de cada vuelta

        $numero = 1;
        while($numero <= 15){
            echo $numero."<br>";
            $numero++;
        }
        echo "<h1>Do-while</h1>";
        // DO-WHILE: Funciona exactamente igual que el WHILE pero se hace al menos una vez el código que haya dentro del bucle (aunque la condición no se cumpla)
        $numero = 20;
        $acum = 0;
        do{
            $acum+=$numero;
            echo $acum."<br>";
            $numero--;
        }while($numero>0);

        echo "<h1>for</h1>";
        // la diferencia del for con respecto los dos anteriores es que tenemos que especificar de dónde partimos, hasta donde iteramos y cómo incrementamos/decrementamos la variable iterativa: TODO ESTO DENTRO DE LA ESTRUCTURA DEL BUCLE
        $numero = 500;
        $cont = 0;
        for($i=0; $i<=10; $i++){
            $numero -= $i;
            echo "<p>Iteración ".($i+1).": $numero</p>";
        }

        echo "<h1>Bucles anidados</h1>";
        for($i = 0; $i<5; $i++){
            for($j = 0; $j<5; $j++){
                echo "[$i,$j]";
            }
            echo "<br>";
        }

        echo "<h3>Bucles y HTML</h3>";
        echo "<ol>";
        for($i=1;$i<=3;$i++){
            echo "<li>Elemento número: $i</li>";
        }
        echo "</ol>";

    ?>
</body>
</html>