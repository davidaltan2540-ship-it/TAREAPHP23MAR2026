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

//4. FUNCIÓN BUSCAR Y REEMPLAZAR TEXTOS
// Busca un texto dentro de una cadena y lo reemplaza por otro.
// Parámetros: (buscar, reemplazar_con, cadena_original)
$frase = "Me gusta el café con leche";
$nueva = str_replace("café", "té", $frase);
echo "4. str_replace: $nueva \n"; // Me gusta el té con leche
//como podemos observar en la línea del código anteriro se mostrará la otra palabra al usuario.

//5. FUNCIÓN para extraer parte de una cadena
// Extrae un fragmento de una cadena desde una posición dada.
// Parámetros: (cadena, posicion_inicio, longitud)
// Las posiciones empiezan en 0.
$texto = "Guatemala 2026";
$pais  = substr($texto, 0, 9);   // Desde posición 0, toma 9 caracteres
$anio  = substr($texto, 10, 4);  // Desde posición 10, toma 4 caracteres
echo "5. substr — País: $pais | Año: $anio \n";


?>