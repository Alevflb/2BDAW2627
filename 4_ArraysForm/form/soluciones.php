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
    if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej2" && isset($_POST["filtro"])){
        $numeros = $_POST["numeros"];
        $min = $_POST["min"];
        $max = $_POST["max"];
        $filtro = $_POST["filtro"];   
        
        $array = [];
        for($i = 0; $i < $numeros; $i++){
            $array[] = rand($min, $max);
        }

        $solucion = [];

        // foreach fuera y switch dentro
        foreach($array as $num){
            switch($filtro){
                case "pares":
                    if($num % 2 == 0) $solucion[] = $num;
                    break;
                case "primos":
                    $esPrimo = true;
                    for($i = 2; $i<$num; $i++){
                        if($num % $i == 0) $esPrimo = false;
                    }
                    if($esPrimo) $solucion[] = $num;
                    break;
                case "perfectos":
                    $acumDivisores = 0;
                    for($i = 1; $i<$num; $i++){
                        if($num % $i == 0) $acumDivisores+=$i;
                    }
                    if($num == $acumDivisores) $solucion[] = $num;
                    break;
                default:
                    echo "<h1>VIVA LA VIDA</h1>";
            }
        }
        echo "<pre>"; print_r($solucion); echo "</pre>";
    } 

    }


    ?>
</body>
</html>