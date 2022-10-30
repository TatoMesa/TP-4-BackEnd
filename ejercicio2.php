<?php
/*Básicamente el mismo ejercicio anterior, pero esta vez, debe hacerlo utilizando un procedimiento el 
cual toma un tercer argumento y coloca el resultado de la suma en dicho parámetro. */

function suma($a,$b, &$c){
    $c =  $a + $b;
};

$a = readline("Ingrese el primer sumando a: "). PHP_EOL;
$b = readline("Ingrese el segundo sumando b: "). PHP_EOL;
suma($a,$b,$c);
echo ( "La suma de a y b es: ". $c). PHP_EOL;



?>