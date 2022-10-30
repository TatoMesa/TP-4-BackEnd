<?php
/*Hacer un módulo denominado Fact que tiene un parámetro X de tipo entero, en el cuál recibe un 
valor entero positivo y devuelve P que es la productoria de X.*/

function fact($x){
    if (($x == 0) or ($x == 1)){
        return 1;
    }else
        return $x*fact($x-1);
}

$x = readline("Ingrese el numero a calcular su factorial: ");
echo("El Factorial de " . $x . " es: " . fact($x));

?>