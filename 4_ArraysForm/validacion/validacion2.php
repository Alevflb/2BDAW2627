<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    ?>
    <style>
        .olee{
            color:green;
        }
        .liada{
            color:red;
        }
    </style>
</head>
<body>
    <?php
    /**
     * Segunda forma de validar: Meter todos los errores en un array para mostrarlos después
     */

    //1. Variables vacías: la primera vez el formulario se pinta sin valores ni warnings
    $nombre = "";
    $correo = "";
    $edadTexto = "";
    $errores = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        print_r($_POST);

        //1. Recoger y quitando espacios en los extremos
        $nombre = trim($_POST["nombre"] ?? "");
        $correo = trim($_POST["correo"] ?? "");
        $edadTexto = trim($_POST["edad"] ?? "");

        //2. Validar: cada error se añade al array, no se para en el primero
        if($nombre == ""){
            $errores[] = "El nombre es obligatorio";
        }
        if(filter_var($correo, FILTER_VALIDATE_EMAIL) === false){
            $errores[] = "El correo no es válido";
        }
        $edad = filter_var($edadTexto,FILTER_VALIDATE_INT);
        if($edad === false || $edad < 18 || $edad > 80){
            $errores[] = "La edad tiene que ser un número entero entre 18 y 80 años";
        }

        //3. Mostrar el resultado o la lista de errores
        if(count($errores) == 0){
            echo "<p class='olee'>La vida es maravillosa y no hay errores: Nombre =>".htmlspecialchars($nombre)." Correo: ".htmlspecialchars($correo)." Edad: ".htmlspecialchars($edad)."</p>";
        }else{
            echo "<ul class='liada'>";
            foreach($errores as $error){
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }

    ?>
    <form action="" method="post">
        <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($nombre) ?>"><br>
        
        <label for="correo">Correo:</label><input type="text" name="correo" id="correo" value="<?= htmlspecialchars($correo) ?>"><br>
        <label for="edad">Edad:</label><input type="text" name="edad" id="edad" <?= htmlspecialchars($edadTexto) ?>><br>
        <input type="submit" value="Valideichon">
    </form>
</body>
</html>