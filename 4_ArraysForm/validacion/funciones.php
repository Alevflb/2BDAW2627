<?php
    /**
     * CREAR TRES CONSTANTES: 
     *          LA PRIMERA CONSTANTE SE LLAMARÁ GENERAL Y TENDRÁ COMO VALOR 1.21
     *          LA SEGUNDA CONSTANTE SE LLAMARÁ REDUCIDO Y TENDRÁ COMO VALOR 1.1
     *          LA TERCERA CONSTANTE SE LLAMARÁ SUPERREDUCIDO Y TENDRÁ COMO VALOR 1.04
     */
    define("GENERAL", 1.21);
    define("REDUCIDO", 1.1);
    define("SUPERREDUCIDO", 1.04);
    function calcularPVP($precio, $iva){
        $sol = match($iva){
            "general" => $precio * GENERAL,
            "reducido" => $precio * REDUCIDO,
            "superreducido" => $precio * SUPERREDUCIDO
        };
        return $sol;
    }
?>