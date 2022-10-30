<?php

/* Escribir un módulo denominado PMS que tiene dos parámetros formales B y A. Calcular B (base) 
elevado a A, siendo B un número real cualquiera y A un valor entero positivo o nulo. Hacerlo 
mediante multiplicaciones sucesivas de la Base. Si el cálculo no puede realizarse debe devolver cero. */

function PMS($b, $a)
{
    if ($a == 0)
        return 1;
    elseif ($a == 1)
            return $b * pms($b, $a - 1);
        elseif ($a > 1)
                return ($b * pms($b, $a - 1));
            else
                return 0;
}

$b = readline("Ingrese el numero de la Base: ").PHP_EOL;
$a = readline("Ingrese el numero a elevar la base: ").PHP_EOL;

echo("El resultado de elevar $b  a la  $a es: ". pms($b,$a)) .PHP_EOL;

?>