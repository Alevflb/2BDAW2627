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
    <h3>Cómo funciona una petición</h3>
    <p>
    Cada vez que el navegador pide esta página, PHP se ejecuta desde cero y rellena unos arrays especiales (superglobales): $_GET, $_POST, $_REQUEST y $_SERVER. Son arrays normales: se leen por clave y se recorren con foreach.
    </p>
    <!-- <pre>
        <?php
           // print_r($_SERVER);
        ?>
    </pre> -->
    <form action="" method="get">
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <label>Edad: </label>
        <input type="number" name="edad">
        <input type="submit" value="ENVIAR">
    </form>
    <?php
    $nombre = $_GET["nombre"];
    echo $nombre;

    if(isset($_GET["nombre"])){
        $nombre = $_GET["nombre"];
        echo $nombre;
    }else{
        echo "<p>plis introduce cosas en el formulario</p>";
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nombre = $_GET["nombre"];
        echo $nombre;
    }else{
        echo "<p>plis introduce cosas en el formulario</p>";
    }
    $claves = [
        "REQUEST_METHOD" => "Método de la petición",
        "REQUEST_URI" => "Ruta y parámetros pedidos",
        "QUERY_STRING" => "Parámetros de la URL",
        "SCRIPT_NAME" => "Archivo PHP que se ejecuta",
        "HTTP_REFERER" => "Página de la que vienes",
        "REMOTE_ADDR" => "IP del cliente",
        "SERVER_NAME" => "Nombre del servidor",
        "SERVER_PORT" => "Puerto del servidor"
    ];
    ?>
    <table>
        <tr>
            <th>Clave de $_SERVER</th>
            <th>Qué es</th>
            <th>Valor (en tiempo de ejecución)</th>
        </tr>
        <?php
            foreach($claves as $clave => $descripcion){
                // echo "<td>$clave</td>";
                // echo "<td>$descripcion</td>";
                // echo "<td>".$_SERVER["REQUEST_METHOD"]."</td>";
        ?>
        <tr>
            <td><?= $clave; ?></td>
            <td><?= $descripcion; ?></td>
            <td><?= $_SERVER[$clave]; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>

    <h3>Arrays que más vamos a usar a la hora de manejar formularios</h3>
    <?php
    echo "\$_GET <pre>"; print_r($_GET); echo "</pre>";
    echo "\$_POST <pre>"; print_r($_POST); echo "</pre>";
    echo "\$_REQUEST <pre>"; print_r($_REQUEST); echo "</pre>";
    ?>

    <h3>GET y POST en la misma petición</h3>
    <form action="?origen=2BDAW" method="post">
        <label> Comentario: </label>
        <input type="text" name="comentario">
        <input type="submit" value="OK">
    </form>

    <h3>¿Cómo he llegado a esta página?</h3>
    <?php
    //REQUEST_METHOD ==> para esta clave SIEMPRE existe un valor (GET predeterminado)
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<p>He llegado a esta página a través de un formulario con el método POST</p>";
    }else{
        echo "<p>He llegado a esta página a través de un formulario con el método GET</p>";
    }
    ?>

    <h3>Creación del contador</h3>
    <?php
    $contador = 0;
    if(isset($_POST["contador"])){
        $contador = $_POST["contador"];
    }
    if(isset($_POST["accion"])){
        if($_POST["accion"] == "SUMAR") $contador++;
        else $contador--;
    }
    ?>
    <form action="" method="post">
        <input type="hidden" name="contador" value="<?= $contador ?>">
        <p>Contador: </p>
        <input type="submit" value="SUMAR" name="accion">
        <input type="submit" value="RESTAR" name="accion">
    </form>
</body>
</html>