<?php
    function contarDivisores(int $num):int{
        $divisores = 0;
        for($i=1; $i<=$num;$i++){
            if($num % $i == 0) $divisores++;
        }
        return $divisores;
    }

    for($i=500; $i<505; $i++){
        $texto = "";
        $numerito = rand(2,50);
        $texto .= $numerito;
        $divisores = contarDivisores($numerito);
        $texto .= ": $divisores divisores ";

        $cantidad = match($divisores){
            2 => "(primo)",
            3,4 => "(pocos)",
            default => "(muchos)"
        };

        // $texto .= "$cantidad<br>";
        echo "$numerito: $divisores divisores $cantidad <br>";
    }
    // echo $texto;
?>