<?php
/*Hacer un algoritmo que llame a la función F (X, Y) =5.6*X+Y/2.5 y que muestre los resultados para F 
(3,5); F (9,2) y F (56,87)*/

function f($x,$y){
    return ((5.6*$x) + ($y/2.5));
};

echo (" El resultado de F(3,5) es: ".f(3,5)).PHP_EOL;
echo (" El resultado de F(9,2) es: ".f(9,2)).PHP_EOL;
echo (" El resultado de F(56,87) es: ".f(56,87)).PHP_EOL;
?>