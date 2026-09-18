<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables locales, gloables y estáticas</h1>
    <h2>Variable local</h2>
    <p>Se crea dentro de una función y sólo podemos utilizarla dentro de esa función</p>
    <?php
        function mostrarAlumno(){
            $nombre = "Samu";
            echo "Dentro de la función: $nombre <br>";
        }
        mostrarAlumno();

        //echo $nombre; sólo puedo llamar a la variable nombre dentro de la función donde se ha definido dicha variable

        $mensaje = "patata<br>";

        function mostrarMensaje(){
            $mensaje = "puerro";
            echo $mensaje."<br>";
        }

        echo $mensaje; //la variable de fuera
        mostrarMensaje(); //la variable de dentro
    ?>

    <h2>Varibale global</h2>
    <p>Son las que se crean FUERA de las funciones</p>
    <?php
        $numero = 12;
        function restarUno(){
            global $numero; //recoger la variable global
            return --$numero;
        }

        echo restarUno();
        echo $numero;
    ?>
    <h3>Variables estáticas</h3>
    <?php

        function contador1(){
            $cont = 0;
            $cont++;
            echo "Contador: $cont<br>";
        }
        contador1();
        contador1();
        contador1();
        contador1();

        function contador2(){
            static $cont = 0;
            $cont++;
            echo "Contador: $cont<br>";
        }
        contador2();
        contador2();
        contador2();
        contador2();
        contador2();
    ?>

    <p>Crea una función llamada contarDeDosEnDos() con un contador estático que por cada llamada a la función sume 2 al contador. Inicializa el contador a 2.</p>
</body>
</html>