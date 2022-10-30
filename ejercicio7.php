<?php

/* Diseñar un algoritmo que ordene tres números a, b, c en forma ascendente utilizando un 
procedimiento denominado menorMayor que tiene dos parámetros pasados por referencia que 
devuelve en el primer parámetro el valor menor y en el segundo el valor mayor de los parámetros 
respectivamente.
*/

function menorMayor(&$a, &$b, $c){

    if ($a < $b && $a < $c && $b < $c)
        $b = $c;
    elseif(($b < $a && $b < $c && $a < $c)){
        $a = $b;
        $b = $c;
    }elseif(($b < $a && $b < $c && $c < $a)){
        $c = $a;
        $a = $b;
        $b = $c;
    }elseif(($c < $a && $c < $b && $a < $b))
        $a = $c;
    elseif(($c < $b && $c < $a && $b < $a)){
        $b = $a;
        $a = $c;
    }
}

$a = readline ("Ingrese los tres numeros a comparar: ").PHP_EOL; 
$b = readline ("Ingrese los tres numeros a comparar: ").PHP_EOL;
$c = readline ("Ingrese los tres numeros a comparar: ").PHP_EOL;

menorMayor($a,$b,$c);

echo ("El numero menor es: ". $a).PHP_EOL;
echo ("El numero mayor es: ". $b).PHP_EOL;

?>
