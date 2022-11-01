<?php

/* Escribe una función en pseudocódigo llamada ConversionPesos (...) que permita convertir una 
cantidad de dinero dada en dólares, libras o yenes a Pesos Argentinos. Estas son las equivalencias 
aproximadas: 
1 libra= 23,11pesos 
1 dólar= 17,48 pesos 
1 yen= 0,154 pesos 
1 euro= 20,59 pesos */

function conversionPesos($monto , $tipoMoneda){

    switch ($tipoMoneda){
        case "libra" :
            return $monto * 299;
        case "dolar" :
            return $monto * 292;
        case "yen" :
            return $monto * 198;
        case "euro" :
            return $monto * 294;
        default :
            return 0;    
        
    }
}
$monto = readline("Ingrese la cantidad de dinero a covertir: ") . PHP_EOL;
$moneda = readline("Ingrese la moneda en la cual tiene su dinero: ") ;
$pesos = conversionPesos($monto,$moneda);

echo ($monto . $moneda . " convertidos a pesos es: " . $pesos);


?>