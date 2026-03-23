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

//18. Función número aleatorio
// Genera un número entero aleatorio asignandole el valor mínimo y el valor máximo

$aleatorio = rand(1, 100);
echo "18. rand(1, 100): $aleatorio \n"; // Número entre 1 y 100


//19. funcione con valor max() y min() de un array
// max() retorna el valor más alto de una lista o array.
// min() retorna el valor más bajo de una lista o array.

$notas = [85, 92, 73, 67, 95, 88];
echo "19. max: " . max($notas) . " \n"; // 95
echo "19. min: " . min($notas) . " \n"; // 67

//20. Función para formatear un número
// formatea un número con separadores de miles y decimales
// Parámetros: (número, decimales, sep_decimal, sep_miles)
$precio = 15750.5;
echo "20. number_format: Q" . number_format($precio, 2, '.', ',') . " \n";
// Resultado: Q15,750.50

//21. FUNCIÓN CONTAR ELEMENTOS
// esta función cuenta el número de elementos que hay en un array 

$frutas = ["manzana", "pera", "uva", "mango"];
echo "21. count: " . count($frutas) . " \n"; // 4


//22. Función agregar al final
//agrega uno o más elementos al final de un array

array_push($frutas, "sandía", "melón");
echo "22. array_push: ";
print_r($frutas);
 

//23. Función eliminar el ultimo elemento 
//esta función elimina el ultimo elemento de un array y lo devuelve  
$eliminado = array_pop($frutas);
echo "23. array_pop (eliminado): $eliminado \n"; // melón

//24. Función ordenar array 
// sort()  -> ordena de menor a mayor (A-Z / 1-9)
// rsort() -> ordena de mayor a menor (Z-A / 9-1)
// esta función lo que hace es ordenar arrays de forma ascendente o descendente dependiendo de la funcion que se utilice 

$nums = [5, 2, 8, 1, 9, 3];
sort($nums);
echo "24. sort (ascendente):  ";
print_r($nums);
 
rsort($nums);
echo "24. rsort (descendente): ";
print_r($nums);


//25. Función verificar si un valor existe en un array
// en esta función virifica si existe un valor especifico dentro de un array asimismo retorna TRUE o FALSE, no retorna el índice como tal
$existe = in_array("pera", $frutas);
echo "25. in_array 'pera': " . ($existe ? "SÍ existe" : "NO existe") . " \n";



?>