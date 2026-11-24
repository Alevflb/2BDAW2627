<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    require "funciones.php";

    ?>
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
    <h4>Calculadora de IVA validada</h4>
    <?php
        // Declaramos las variables temporales vacías: la primera vez el formulario se crea sin valores
        $tmp_precio = "";
        $tmp_iva = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            print_r($_POST);
            //1. Recogida de datos en variables temporales
            $tmp_precio = trim($_POST["precio"] ?? "");

            // Los selects si no se escoge ninguno hace que la pareja clave-valor no exista
            // Por eso estamos obligados SI O SI a usar isset para los selects
            print_r($_POST);
            if(isset($_POST["iva"])) $tmp_iva = $_POST["iva"];
            else $tmp_iva = "";

            //2. VALIDACIÓN DEL PRECIO
            if($tmp_precio == ""){
                //NIVEL 1: Comprobar que no esté vacío
                $err_precio = "El precio es obligatorio";
            }else{
                //NIVEL 2: Validar que sea un número (float)
                // filter_var() con el filtro FILTER_VALIDATE_FLOAT ==> acepta tanto enteros como decimales
                $tmp_precio = filter_var($tmp_precio, FILTER_VALIDATE_FLOAT);
                if($tmp_precio === FALSE){
                    $err_precio = "El precio debe ser un número decimal válido";
                }else{
                    //NIVEL 3: Validar que sea positivo y mayor a 0
                    if($tmp_precio<=0){
                        $err_precio = "El precio debe ser mayor a 0";
                    }else{
                        //NIVEL 4: Validar límite máximo razonable 
                        if($tmp_precio> 999999999.9){
                            $err_precio = "No eres el CEO de NVIDIA campeón";
                        }else{
                            // Si he llegao aquí, todo está bien así que ASIGNAMOS VALOR A LA VARIABLE DEFINITIVA
                            $precio = $tmp_precio;
                        }
                    }
                }
            }

            //3. VALIDACIÓN DEL IVA (whitelist)
            $ivas_validos = ["general", "reducido", "superreducido"];
            if($tmp_iva == ""){
                //NIVEL 1: Comprobar que no esté vacío
                $err_iva = "El tipo de IVA es obligatorio";
            } else {
                //NIVEL 2: Validar si lo que me ha llegado del formulario está en mi array de ivas válidos
                if(!in_array($tmp_iva, $ivas_validos)){
                    $err_iva = "El tipo de IVA no es válido";
                } else {
                    //Todo correcto: asignar valor a variable definitiva
                    $iva = $tmp_iva;
                }
            }
        }
    ?>
    <form action="" method="post">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" value="<?= $tmp_precio ?>"><br>
        <?php 
        if(isset($err_precio)) echo "<p class='error'>$err_precio</p>";
        ?>
        <br><br>
        <!-- <label for="precio2">Precio2</label>
        <input type="text" name="precio2" id=""><br> -->
        <!-- 
                precio2 solo puede ser un entero (no me vale decima) y debe de estar comprendido entre -100 y 100 
                mostrar los errores en el formulario (si es lo hay)
                en el caso de que no haya errores, mostar el precio 2 en el h2 de abajo junto con el precio 1
        -->
        <select name="iva" id="">
            <option selected disabled>-- ELIGE TIPO IVA --</option>
            <option value="general">General</option>
            <option value="reducido">Reducido</option>
            <option value="superreducido">Superreducido</option>
        </select><br>
        <?php 
        if(isset($err_iva)) echo "<p class='error'>$err_iva</p>";
        ?>
        <input type="submit" value="Calcular PVP">
    </form>
    <?php
    if(isset($precio) && isset($iva)){
        //echo "<h2 class='acierto'>PRECIO: $precio y $iva</h2>";
        echo "<h2 class='acierto'>".calcularPVP($precio,$iva)."</h2>";
    }
    ?>
</body>
</html>