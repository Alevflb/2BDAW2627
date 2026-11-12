<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>ç
    <style>
        .aviso{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h2>Conceptos básicos: isset, trim y htmlspecialchars</h2>
    <p>
        Antes de validar un formulario hay que tener claras tres ideas: 1. Cómo saber si un dato existe o está vacío, 2. cómo limpiar los espacios en blanco de los extremos, 3. cómo mostrar en la página un texto que ha escrito el usuario a través de un formulario sin que se interprete como HTML.
    </p>
    <form action="" method="get">
        <input type="text" name="nombre" id="">
        <input type="submit" value="ENVIAR">
    </form>
    <?php

    echo "<pre>".$_GET["nombre"]."</pre>";
    echo "<pre>".trim($_GET["nombre"])."</pre>";
    //htmlspecialchars()
    echo htmlspecialchars($_GET["nombre"]);

    //<script>alert('holiiiii');</script>document.body.innerHTML="<h1>Sitio jakiado</h1></script>";<b onmouseover=alert('Holiiii')>Acercate bebé...</b>
    ?>
    <h2>isset y empty: asuente, null y cero</h2>
    <table>
        <tr>
            <th>Valor $x</th>
            <th>isset($x)</th>
            <th>empty($x)</th>
        </tr>
    <?php
        $pruebas =[
            ['null', null, false],
            ['"" (cadena vacía)', '', false],
            ['"0" (cadena con un cero)', '0', true],
            ['0',0,true],
            ['false',false,false],
            ['[] (array vacío)',[],false],
            ['" " (un espacio en blanco)',' ',true],
            ['"0.0"', '0.0', false],
            ['"hola"','hola', false]
        ];
        foreach($pruebas as $pruebita){
            $x = $pruebita[1];
            $clase = $pruebita[2] ? "class='aviso'" : "";
            echo "<tr $clase>";
            echo "<td>".$pruebita[0]."</td>";
            echo "<td>".(isset($x) ? "true" : "false")."</td>";
            echo "<td>".(empty($x) ? "true" : "false")."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>