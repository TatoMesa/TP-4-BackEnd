<?php

/* Crea una función MayorDeTres, que reciba tres números enteros y devuelva el valor del mayor de 
ellos. Por ejemplo, para los números 5, 7 y 5, devolvería el valor 7. */

function mayorDeTres($a,$b,$c){
    if(($a >= $b)and($a >= $c))
        return $a;
    else
        if(($b >= $a)and($b >= $c))
            return $b;
        else
            return $c;
}

$a = readline ("Ingrese los tres numeros a comparar: ").PHP_EOL; 
$b = readline ("Ingrese los tres numeros a comparar: ").PHP_EOL;
$c = readline ("Ingrese los tres numeros a comparar: ").PHP_EOL;

echo ("El mayor de los tres numeros ingresados " . $a . $b . $c . " es: ".mayorDeTres($a,$b,$c)); 

?>