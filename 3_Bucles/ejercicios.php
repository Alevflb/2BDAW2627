<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <p>Con while, recorrer desde 150 hasta 0. Mostrar solo los pares que no sean múltiplos de 6. Calcular su cantidad, su suma y la media. Corrige Pedro CORREGIDO</p>
    <h3>Ejercicio 2</h3>
    <p>Recorrer desde 1 hasta 200 con while. Seleccionar los múltiplos de 7 que no sean múltiplos de 3. Mostrar cada número que cumple con la condición y calcular la cantidad de número totales seleccionados, su suma, su primer valor y su último valor. </p>
    <h3>Ejercicio 3</h3>
    <p>VERSION1: Empiezas con 0€ y ahorras 40 cada semana hasta alcanzar o superar los 4K€. Cuántas semanas te hacen falta para llegar a los 4K?.Corrige Álvarito CORREGIDO</p>
    <p>VERSION2: Añade a la versión 1 un gasto de 20€ cada 4 semanas. Muestra para cada semana la aportación, el gasto (si hay) y lo que llevamos ahorrado. Corrige Rafa Mendoza CORREGIDO</p>
    <h3>Ejercicio 4</h3>
    <p>Genera números aleatorios del 1 al 20 con do-while y acumúlalos. Si el total supera el número 100 sin haber pasado por el 100 exactamente (te has pasado de 100) termina la acumulación y muestra el total. Si coincide en algún momento del bucle que la acumulación es 100 exacto, sigue acumulando randoms hasta pasar el 150. Corrige SamuJ CORREGIDO</p>
    <h3>Ejercicio 5</h3>
    <p>Crea una función tipada que reciba un número y dos límites enteros de multiplicadores. Rechaza límites invertidos. Recorre el intervalo con for y muestra solo las operaciones cuyo resultado sea par, calcula cuántas has mostrado y la suma de sus resultados. Corrige Pablo</p>
    <h3>Ejercicio 6</h3>
    <p>En un único for del 1 al 100, calisifica cada número como múltiplo solo de 3, solo de 5, de ambos o ninguno. Muestra los pertenecientes a los tres primeros grupos y calcula la media de cada grupo por separado e indica el grupo con mayor media. Corrige Iker CORREGIDO</p>
    <h3>Ejercicio 7</h3>
    <p>
        Crear una función con un número entero random del 1 al 999999. Vamos a calcular la cantidad de cifras que tiene el número, la suma de las cifras, la cifra más grande, la cifra más pequeña y el número de ceros que tiene la cifra.

        cifras(1020) => Numero cifras = 4 Suma = 3 Cifra más grande = 2 Cifra más pequeña = 0 Número de ceros = 2

    </p>
    <?php
        function destripar(){
            $numero = rand(1,999999);
            $original = $numero;
            $cantidad = 0;
            $suma = 0;
            $ceros = 0;
            $mayor = 0;
            $menor = 9;
            do{
                //sacar el dígito más a la derecha que tenga mi número
                $digito = $numero % 10;

                $cantidad++;
                $suma+=$digito;

                if($mayor<$digito) $mayor = $digito;
                if($menor>$digito) $menor = $digito;
                if($digito == 0) $ceros++;

                //eliminar el dígito más a la derecha que ya he usado en las líneas de arriba
                //dividimos entre 10 para cargarnos el dígito de la derecha y pasamos el número decimal resultante pasándolo a entero
                $numero = intval($numero/10);
            }while($numero > 0);

            echo "Número original: $original<br>Número de cifras: $cantidad <br> La suma de las cifras es: $suma <br> La cifra mayor y menor son: $mayor,$menor <br> El número de ceros es: $ceros<br>";
        }
        destripar();
    ?>



    <h3>Ejercicio 8</h3>
    <p>
        Crea una función que calcule la suma de la siguiente forma: 1 -2 +3 -4 +5... hasta n. La función acepta enteros del 0 al 100. Y devolverá el resultado de la suma modificada en un párrafo y justo debajo el resultado de la suma normal.
    </p>
        sumaRara(4) 
        <p>Resultado modificado: -2</p>
        <p>Resultado normal: 10</p>
    <h3>Ejercicio 9</h3>
    <p>
        Crear una función llamada factorial($n). Rechazando números fuera del rango 0 a 10. Calculo el factorial de dicho número. La operación factorial es la multiplicación sucesiva desde 1 hasta el propio número (n). Recuerda: 0factorial (o 0!)= 1.
        Ejemplo: factorial(4) => 1 X 2 X 3 X 4 = 24
    </p>
    <h3>Ejercicio 10</h3>
    <?php
    function tablita($n){
    ?>
    <table border="">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Cuadrado</th>
                <th>Cubo</th>
                <th>Signo</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $color = 1;
        for($i=$n; $i>=-$n;$i--){
            if($i!=0){
        ?>
            <tr 
            <?php 
                if($color%2!=0) echo "style='background-color:lightblue'";
                else echo "style='background-color:pink'";
                $color++;
            ?>
            >
                <td><?php echo $i; ?></td>
                <td><?php echo pow($i,2); ?></td>
                <td><?php echo pow($i,3); ?></td>
                <td>
                    <?php 
                        if($i>0) echo "Positivo";
                        else echo "Negativo";
                    ?>
                </td>
            </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
    <?php
    }
    tablita(20);
    ?>
    <h3>Ejercicio 11</h3>
    <p>
        EJERCICIO DE LOS GASTOS SEMANALES MODIFICADO. Ganamos 2500€ al mes, cada semana entre cena con la novia, gasolina y meter dinero al lol se nos va de manera fija 120€. Cada tres semanas gastamos el doble porque la parienta quiere cenar en el trocadero. Generar una tabla con 4 columnas. Partimos de 2K de ahorros. Mostrar en una tabla cuanto ahorro por mes. Sacar la información de los siguientes 4 años si todo siguiese igual. Cada fila es una semana. 

        Si lo ahorrado hasta la semana X es menos de 5K, la fila tendrá el color de fondo rojo.
        Si lo ahorrado hasta la semana X es menos de 7.5K, la fila tendrá el color naranja.
        Si lo ahorrado hasta la semana X es menos de 10K, VERDE.
        Si lo ahorrado hasta la semana X más de 10K, AZUL.
    </p>
    <table>
        <thead>
            <th>Ahorrado</th>
            <th>Gastado</th>
            <th>Ganancia</th>
        </thead>
    </table>
</body>
</html>