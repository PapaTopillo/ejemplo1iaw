<?php
// Conversión de tipos de datos
// Convesión Automatica (implicita)
$num1=125;
var_dump($num1);
$num1="Manolo";
echo "<br>";
var_dump($num1);
// convesión explicita (manual)
echo"<hr>";
$numero=145;
$valorNum=(string)$numero;
var_dump($valorNum);
$valor=300;
echo "<br> el valor de \$valor es: $valor y el tipo es: ".gettype($valor)."<br>";
$precio=34.56;
$precios=(string) $precio;
echo "<br>";
var_dump($precios);
$precioLimpio=(int) $precio;
echo "<br>";
var_dump($precioLimpio);
// 2.1 string y numeros a boolean
$a=3;
$b=0;
$c=23.56;
$d=0.0;
$e="Manolo";
$f="";

$aB=(bool) $a; // a=3
echo "<br>";
var_dump($aB); // sera verdadero porque no esta vacio

$bB=(bool) $b; // b=0
echo "<br>";
var_dump($bB); // sera falso porque no esta vacio

$cB=(bool) $c; // c=23.56
echo "<br>";
var_dump($cB); // sera verdadero porque no esta vacio

$dB=(bool) $d; // d=0.0
echo "<br>";
var_dump($dB); // sera falso porque no esta vacio


$sB=(bool) $e; // e="Manolo"
echo "<br>";
var_dump($sB); // sera verdadero porque no esta vacio

$fB=(bool) $f; // f=""
echo "<br>";
var_dump($fB); // sera falso porque esta vacio
// 2.2 string a numeros
echo "<hr>"; // linea horizontal
$cad="123.56"; // string
$cadT=(float) $cad; // string a float
$cadT2=(int) $cad; // string a int 
echo "El valor de \$cadT es $cadT y su tipo es: " .gettype($cadT)."<br>"; 
echo "El valor de \$cadT2 es $cadT2 y su tipo es: " .gettype($cadT2)."<br>";
echo "<hr>"; // linea horizontal

$cad="123.56 Manolo"; // string pero ignora las letras despues del numero
$cadT=(float) $cad; // string a float
$cadT2=(int) $cad; // string a int 
echo "El valor de \$cadT es $cadT y su tipo es: " .gettype($cadT)."<br>"; 
echo "El valor de \$cadT2 es $cadT2 y su tipo es: " .gettype($cadT2)."<br>";
echo "<hr>"; // linea horizontal
echo "<br>--------------- Cadena Chunga --------------<br>";
$cad=" Manolo 123.56"; // string pero ignora las letras antes del numero
$cadT=(float) $cad; // string a float
$cadT2=(int) $cad; // string a int 
echo "El valor de \$cadT es $cadT y su tipo es: " .gettype($cadT)."<br>"; 
echo "El valor de \$cadT2 es $cadT2 y su tipo es: " .gettype($cadT2)."<br>";
