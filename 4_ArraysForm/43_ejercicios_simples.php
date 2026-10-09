<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <p>La biblioteca del insti tiene estos libros: "El Quijote", "1984", "Dune", "El perfume"</p>
    <ol>
        <li>Crear la función "unirConComas($array)", que devuelva un texto con todos los valores separados por ", " (sin coma al final).</li>
        <li>Añade el "Momo", "Drácula" y "La Celestina" al final de la biblioteca</li>
        <li>Se piden prestados los libros "Dune" y "Hamlet". Para cada petición, hay que buscar la posición del libro. Si el libro está en la biblioteca lo vamos a eliminar del array y sacaremos por pantalla el mensaje "Prestado: Dune". Si no tenemos el libro sacamos en el navegador "No disponible". En el caso de cargarnos un libro, tenemos que reestructurar el array para que no haya posiciones que existan.</li>
        <li>Mostrar una lista numerada con todos los libros, el total de libros que hay y, en una lista no ordenada todos los libros de la biblioteca en orden alfabético inverso (de la Z a la A)</li>
    </ol>

    <?php
        $biblioteca  = ["Quijote", "1984", "Dune", "El perfume"];
        array_push($biblioteca, "Momo", "Drácula", "La celestina");
        //$biblioteca[] = "Momo";

        $peticiones = ["Dune", "Hamlet"];
        
        foreach($peticiones as $titulo){
            if(in_array($titulo, $biblioteca)){  //in_array lo uso para saber si está
                $posicion = array_search($titulo, $biblioteca); //en el caso en el que esté, saco su posición
                unset($biblioteca[$posicion]);
                echo "Prestado: $titulo";
            }else{
                echo "No disponible";
            }
        }
        $biblioteca = array_values($biblioteca); //para "arreglar" el array con las posiciones ordenadas
    ?>
</body>
</html>