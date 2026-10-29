<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    ?>
</head>
<body>
    <?php
    
    echo "<pre>";print_r($_SERVER);echo "</pre>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //aqui meto todos los ejercicios de los formularios que usan el post

    //hacer el código del ejercicio 1
    if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej1"){
    $conjunto1 = explode(",", $_POST["con1"]);
    $conjunto2 = explode(",", $_POST["con2"]);

    //Unión
    $union = [];
    foreach($conjunto1 as $elemento){
        $union[] = $elemento;
    }
    foreach($conjunto2 as $elemento){
        $existe = false;
        foreach($union as $valor){
            if($valor == $elemento){
                $existe = true;
            }
        }
        if(!$existe) $union[] = $elemento;
    }

    echo "<pre>UNION:";print_r($union);echo "</pre>";
    }
    print_r($_POST);
     //controlar que se haga este codigo solo si se pulsa el boton del segundo form
    if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej2"){
        $numeros = $_POST["numeros"];
        $min = $_POST["min"];
        $max = $_POST["max"];
        $filtro = $_POST["filtro"];   
        echo "hola";
    } 

    }


    ?>
</body>
</html>