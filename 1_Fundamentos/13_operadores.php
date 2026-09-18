<?php

    //Operadores lógicos
    $num1 = 10;
    $num2 = 14;
    $salto = "<br>";
    echo "Es num1 mayor que num2?".($num1<$num2).$salto;

    $num3 = 7;
    $num4 = 7;
    echo "Es num3 igual a num4 Y es num1 menor que num2?: ".(($num3==$num4)&&($num1<$num2)).$salto;

    echo "Es num1 mayor o igual a 3 O es num3 menor que num2?".(($num1>=3)||($num3<$num2)).$salto;

    echo $num2!=$num1; 