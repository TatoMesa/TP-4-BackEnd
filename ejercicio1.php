<?php

/*Escriba un programa con una función que tome como parámetro dos enteros, los sume y devuelva 
como resultado la suma. El programa deberá pedir al usuario los dos números, luego llamar a la 
función con los números leídos como argumentos y por último informar al usuario el valor de la 
suma.*/


function suma($a,$b){
    return  $a + $b;
};

$a = readline("Ingrese el primer sumando a: "). PHP_EOL;
$b = readline("Ingrese el segundo sumando b: "). PHP_EOL;
$x = suma($a,$b);
echo ( "La suma de a y b es: ". $x). PHP_EOL;

?>