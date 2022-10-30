<?php

/* Escribir un algoritmo que utilice un módulo procedimiento denominado mM que tiene un parámetro 
formal X de tipo carácter, si el carácter que recibe es una letra en minúscula modifica el parámetro 
con carácter en mayúscula */

function mN(&$x){
    switch  ($x){
        case "A":
            $x="a";
            break;
        case "B":
            $x = "b";
            break;
        case "C":
            $x = "c";
            break;
        case "D":
            $x = "d";
            break;
        case "E":
            $x = "e";
            break;
        default :
            $x = "8";
            break;

    }
}

$x = readline("ingrese letra a cambia de mayúscula a minuscula: ");
echo("la letra en mayuscula es: ". $x . mN($x). $x );

?>