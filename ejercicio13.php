<?php

/*  Ingresar repetidamente el código (DNI) del estudiante (tipo entero) y dos notas Nota1 y Nota2 de los 
exámenes (tipo real) la finalización del ingreso de datos es a cuando se ingresa un el código igual a 
999 (validar que las notas sean valores mayores o iguales a cero). Calcular el promedio de las notas, 
mediante un módulo denominado promedioNotas. Asignar la calificación de acuerdo a las notas de 
la tabla, hacer el algoritmo, usando un módulo denominado calificacionNotas que recibe un 
parámetro formal X de tipo real, que es la Nota promedio del estudiante y que devuelve una cadena 
de caracteres con la calificación correspondiente, como se nota en la tabla siguiente:*/

function promedioNotas($n1,$n2){
    return ($n1+$n2)/2;
}

function calificacionNotas($n){
    if($n < 0.5)
        return "Reprobado";
    elseif($n < 3.5)
        return "Insuficiente";
    elseif($n < 5.5)
        return "Suficiente";
    elseif($n < 7.5)
        return "Bueno";
    elseif($n < 9.5)
        return "Distinguido";
    elseif($n <= 10)
        return "Sobresaliente";
}

do {
    $dni = readline("ingres el DNI del estudiante, 999 para finalizar: ") . Php_EOL;
    $n1 = readline("ingrese la 1ª nota del alumno: ") . Php_EOL;
    $n2 = readline("ingrese la 2ª nota del alumno: ") . Php_EOL;
} while ($dni != 999);



?>