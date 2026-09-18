<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funciones en PHP</h1>
    <?php
        //1.- Funciones sin parámetros y sin return
        function saludar(){
            echo "Holamundo<br>";
        }
    ?>
    <h2>Ejemplo sin parámetros y sin return</h2>
    <?php
        saludar();
        saludar();
    ?>
    <h2>Ejemplo con un parámetro pero sin return</h2>
    <?php
        function saludar2($numero){
            echo "El número random es: $numero<br>";
        }
        saludar2(rand(1,100));
        saludar2(rand(1,100));
        saludar2(rand(1,100));
        saludar2(rand(1,100));
        saludar2(rand(1,100));
    ?>
    <h2>Ejemplo sin parámetros pero con return</h2>
    <?php
        function saludame(){
            return "Hola gente<br>";
        }
        echo saludame();
    ?>
    <h2>Ejemplo con parámetros y con return</h2>
    <?php
        function sumar($a,$b){
            return ($a+$b);
        }
        // Usar la función sumar de tal modo que aparezca por pantalla lo siguiente: La suma de X y de Y es: solución
        $X = rand(1,50);
        $Y = rand(1,50);
        echo "La suma de ".$X." y ".$Y." es: ".sumar($X, $Y);
    ?>
    <h2>Ejemplo de una función con parámetros por defecto</h2>
    <?php
        function darBienvenida($nombre="Jason"){
            echo "Bienvenido/a, $nombre! <br>";
        }

        darBienvenida();
        darBienvenida("Lucia");
    ?>
</body>
</html>