<?php

//Tipos de funciones "NATIVAS" en PHP

//1. FUNCION para verificar la longitud o cuantos caracteres tiene  una cadena

$cadena = "Hola Mundo";
$longitud = strlen($cadena);
echo "1. strlen: $longitud \n"; // Resultado: 10


//2. FUNCIÓN CONVERTIR A MÁYUCUSLAS
// Convierte todos los caracteres de una cadena a mayúsculas.
$texto = "php es genial";
$mayus = strtoupper($texto);
echo "2. strtoupper: $mayus \n"; // EL RESULTAEDO SE OBSERVARÁ ASI: PHP ES GENIAL


//3. FUNCIÓN CONVERTIR A MINUSCULAS
// Convierte todos los caracteres de una cadena a minúsculas.
$texto = "PHP ES GENIAL";
$minus = strtolower($texto);
echo "3. strtolower: $minus \n"; // php es genial




?>