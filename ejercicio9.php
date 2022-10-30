<?php

/*Realizar un algoritmo que incluya los siguientes módulos: 
a. Módulo Menú que tiene un parámetro entero pasado por referencia que devuelve una opción. 
b. Módulo Bienvenida sin parámetros que muestra un mensaje de bienvenida. 
c. Módulo resto que acepta dos parámetros enteros y devuelve un número entero que es el resto de 
la división entera del primer parámetro sobre el segundo parámetro. No debe utilizar el operador 
MOD. 
d. Módulo EsPar que devuelva el valor lógico "verdadero" o "falso" según si el número que se 
indique como parámetro es par o no lo es 
e. Módulo NumeroACadena que acepta un parámetro entero número entre 0 y 10, y devuelve una 
cadena de caracteres que representa el número en letras. 
f. Módulo Intercambio que acepta dos parámetros pasados por referencia que intercambian los 
valores de los parámetros. 
g. Pide al usuario dos números y muestra la "distancia" entre ellos (el valor absoluto de su diferencia, 
de modo que el resultado sea siempre positivo) */

function menu(&$opcion){
}

function bienvenida(){
    Echo ("Bienvenido al programa... ").PHP_EOL;
} 

function resto($x, $y){
    if ($x<$y)
        return $x;
    else{
        $x -= $y;
        return resto ($x,$y);
    }
}

function esPar($x){
    if (($x % 2) == 0)
        return true;
    else
        return false;
}

function numeroACadena($x){
    switch ($x){
        case 0:
            return "cero";
            break;
        case 1:
            return "uno";
            break;
        case 2:
            return "dos";
            break;
        case 3:
            return "tres";
            break;
        case 4:
            return "cuatro";
            break;
        case 5:
            return "cinco";
            break;
        case 6:
            return "seis";
            break;
        case 7:
            return "siete";
            break;
        case 8:
            return "ocho";
            break;
        case 9:
            return "nueve";
            break;
    }
}

function intercambio(&$x,&$y){
    $aux = $x;
    $x = $y;
    $y = $aux;
}

function distancia($x,$y){
    if ($x >= $y)
        return $x-$y;
    else
        return $y-$x;
}

?>