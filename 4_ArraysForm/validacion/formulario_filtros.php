<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
        .acierto{
            color:green;
        }
    </style>
</head>
<body>
    <h2>Validación con filter_var()</h2>
    <form action="" method="get">
        <input type="text" name="entero" id="">
        <input type="submit" value="ENVIAR">
    </form>
    <?php
    $esEntero = filter_var($_GET["entero"], FILTER_VALIDATE_INT);
    if(!$esEntero){
        echo "<p class='error'>El dato introducido no es un número entero</p>";
    }else{
        echo "<p class='acierto'>".$esEntero."</p>";
    }
    // filter_var(): sirve para comprobar si un valor tiene el formato esperado, si es así, se devolverá al tipo correcto.
    // es la función pensada para los datos de un formulario, que siempre llegan como cadenas

    // si el valor es vaĺido, devuelve el valor y a convertido ("25" pasará a ser int(25)) y si no se convertir, devuelve false.

    //FILTROS QUE TENEIS QUE PROBAR

    /**
     * FILTER_VALIDATE_INT
     * FILTER_VALIDATE_FLOAT
     * FILTER_VALIDATE_EMAIL
     * FILTER_VALIDATE_URL
     * FILTER_VALIDATE_BOOLEAN
     */
    var_dump(filter_var('0',FILTER_VALIDATE_INT));
    ?>
</body>
</html>