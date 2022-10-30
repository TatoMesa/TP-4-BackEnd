<?php

/*Hacer un programa que nos permita introducir un numero por teclado y sobre él se permitan 
realizar las siguientes operaciones: Mostrar la cantidad de divisores, hallar su factorial, comprobar si 
es primo e imprimir su tabla de multiplicar.*/

function factorial($x){
    if (($x == 0) or ($x == 1)){
        return 1;
    }else
        return $x*factorial($x-1);
}

function divisores($x){
    $cant = 0;
    for ($i = 1; $i <= $x; $i++){
        if ($x % $i == 0)
            $cant++;
    }
    return $cant;
}

function esPrimo($x){
    $cant = divisores($x);
    if ($cant == 2)
        return true;
    else
        return false;
}

function tabla($x){
    for ($i = 1; $i <= $x; $i++)
        echo ($x . " x " . $i ." = " . $x*$i).PHP_EOL;
}

$x = readline("Ingrese un numero: ");


echo( $x ." Tiene ".divisores($x)." divisisores. ").PHP_EOL;
echo( $x ." Factorial es: ".factorial($x)).PHP_EOL;
echo( $x . " Es un numero primo? ").PHP_EOL;
echo(var_dump(esPrimo($x)));
echo ( "La tabla de multiplicar de ".$x." es: ").PHP_EOL;
echo (tabla($x)).PHP_EOL;

?>
