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

//6. FUNCIÓN PARA BUSCAR POSICIÓN DE UN TEXTO
// Devuelve la posición donde aparece por primera vez un texto asimismo retorna False si no lo encuentra.
$texto = "PHP es genial y PHP es rápido";
$pos = strpos($texto, "PHP");   // Primera ocurrencia → posición 0
echo "6. strpos: posición $pos \n";


//7. FUNCIÓN PARA ELIMINAR ESPACIONES AL INICIO Y AL FINAL 
// Esta función elimina los espacios en blanco al inicio y al final de una cadena
//ahora ltrim() elimina los espacios al inicio y rtrim() elimina los espacios a la derecha

$sucio = "   Hola Mundo   ";
$limpio = trim($sucio);
echo "7. trim: '$limpio' \n"; // 'Hola Mundo'


//8. FUNCIÓN REPETIR UNA CADENA
//ESTA FUNCIÓN REPETIE UNA CADENA N VECES CONSECUTIVAS
$linea = str_repeat("=", 30);
echo "8. str_repeat: $linea \n"; // ==============================


//9. FUNCIÓN PRIMERA LETRA EN MÁYUSCULA
// Convierte la primera letra de una cadena en mayuscula

$nombre = "josué culajay";
echo "9. ucfirst: " . ucfirst($nombre) . " \n"; // Josué culajay

//10. Dividir cadena en array
// esta función divdide una cadena en partes utilizando un delimitador y devuelve un array con las partes resultantes.

$csv    = "nombre,edad,ciudad";
$campos = explode(",", $csv);
// Resultado: ["nombre", "edad", "ciudad."]
echo "10. explode: ";
print_r($campos);


//11. FUNCION UNIR ARRA EN CADENA
// esta funcion une los elementos de un array en una cadena utilizando un dellimitador

$palabras = ["PHP", "es", "genial"];
$frase    = implode(" ", $palabras);
echo "11. implode: $frase \n"; // PHP es genial

//12. funcion Valor Absoluto
//esta función retorna o devuelve el valor positivo de un número (eliminando el signo negativo de referido número)
$num = -42;
echo "12. abs: " . abs($num) . " \n"; // 42


//13. FUNCION PARA REDONDEAR NÚMEROS
// esta función el segundo parametro define cuantos decimales conservar: si se omite redonde el entero más cercano

 
$dec = 4.5678;
echo "13. round (2 decimales): " . round($dec, 2) . " \n"; // 4.57
echo "13. round (entero):      " . round($dec)     . " \n"; // 5



 //14. Función redondear hacia arrriba
// esta clase de función siempre sube al entero más cercano, sin importar los decimales
echo "14. ceil(4.1): " . ceil(4.1) . " \n"; // 5
echo "14. ceil(4.9): " . ceil(4.9) . " \n"; // 5

//15. Función  redondear hacia abajo
// esta función siembre baja al entero más cercano, descartando los decimales
echo "15. floor(4.1): " . floor(4.1) . " \n"; // 4
echo "15. floor(4.9): " . floor(4.9) . " \n"; // 4



//16. Función potencia
// esta función eleva un número a la potencia de otro número

echo "16. pow(2, 10): " . pow(2, 10) . " \n"; // 1024

//17. Función raíz cuadrada
// esta función devuelve la raíz cuadrada de un número

echo "17. sqrt(144): " . sqrt(144) . " \n"; // 12





?>