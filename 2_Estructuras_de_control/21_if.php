<?php
    //FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF
    $a = 7;

    //primera forma
    if($a < 10){
        echo "<p>El número es menor que 10</p>";
    }

    //segunda forma
    if($a < 10) echo "<p>El número es menor que 10</p>";

    //tercera forma
    if($a < 10):
        echo "<p>El número es menor que 10</p>";
    endif;

    //FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF ELSE
    if($a < 10){
        echo "<p>El número es menor que 10</p>";
    }else{
        echo "<p>El número es mayor o igual a 10</p>";
    }

    if($a < 10) echo "<p>El número es menor que 10</p>";
    else echo "<p>El número es mayor o igual a 10</p>";

    //FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF ELSEIF

    if($a<10){
        echo "<p>El número es menor que 10</p>";
    }elseif($a == 10){
        echo "<p>El número es 10</p>";
    }else{
        echo "<p>El número es mayor que 10</p>";
    }
