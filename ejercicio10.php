<?php

/*Diseñar un algoritmo que permita media un menú de opciones  
a) Ingresar un número y mediante un módulo obtener su correspondiente valor en la sucesión de 
Fibonacci.  
b) Solicitar un número y que resuelva mediante un módulo si el parámetro es un numero 
perteneciente a la sucesión o no mediante la devolución de un valor lógico. */



function fibo($n){
    if ($n == 1)
        return 0;
    elseif ($n == 2)
        return 1 + fibo($n-1);
        else {
            return fibo($n-2) + fibo($n-1);
        }
}

function perteneceAFibo($n){
    $i = 1;
    $aux = fibo($i);
    While ($aux < $n){
        $aux = fibo($i++);
    }
    if ($aux == $n)
        return true;
    else    
        return false;
} 




$x = readline("Ingrese numero de la sucecion de fibonacci a descubrir: ").PHP_EOL;
echo (fibo($x));
$x = readline("Ingrese numero para saber si pertenece a fibonacci: ").PHP_EOL;
echo (var_dump(perteneceAFibo($x)));

?>