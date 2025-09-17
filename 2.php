<?php
// No lo cerrare pues esta pagina solo tendra codigo php no una estructur html
// Variables, permiten guardar información
$nombre="Manolo"; // Variable tipo string
$pass="secret0"; // Variable tipo string
$nombreUsuario="Juan Perez"; // Camel case se llama a poner mayuscula despues de la minuscula
$nombreCompletoUsuario="Juan Perez Lopez"; // Variable tipo string
$numero=250; // Variable tipo int
$pvp=47.5; // Variable tipo float
$esValido=false;
$loginInvalido=true;
$dato=null;
/*
    Int (numeros enteros),
    Float | Double (numeros con decimales), 
    String (Cadenas de texto), 
    Bool (Booleanos), 
    Array (variable que guarda muchos datos), 
    Object (No lo utilizaremos), 
    Null (Nulo).
*/
echo " La variable \$pvp de valor $pvp es de tipo: ". gettype($pvp)."<br />\n";
echo ' La variable $pvp de valor '. $pvp .' es de tipo:'. gettype($pvp)."<br />\n";
// quiero esta salida Tu nombre es "Julian"
echo "Tu nombre es \"Julian\"<br>\n"; // \ hace que escapar el caracter
echo 'Tu nombre es "Julian"<br>'."\n"; // \n no funciona con comillas simples
// ahora quiero Tu nombre es 'Julian'
echo "Tu nombre es 'Julian'<br>\n"; // \n es salto de linea
echo "Tu nombre es \'Julian\'<br>"; // esto pinta las \
// \n es salto de linea pero NO en todos los SO, para no tener problemas usaremos PHP_EOL
echo "<br>".PHP_EOL;
echo "Tu nombre es Juan<br>".PHP_EOL;
echo "Tus apellidos Perez Lopez<br>".PHP_EOL;
echo "Adios<br>\n";
// ----------------------------------------------------------------------------------------
echo 'La variable $nombreCompletoUsuario de valor:'.$nombreCompletoUsuario. 'es de tipo:'. gettype($nombreCompletoUsuario).'<br>';
echo "<br/>";
var_dump($esValido); // var_dump nos muetra el tipo de variable y su valor
echo "<br/>";
var_dump($nombreCompletoUsuario);
// ----------------------------------------------------------------------------------------
$var1=34;
$var2=56.89;
$var3="false"; // sin comillas sino lo intepreta como string
$var4="Variable superchula";
$var5=null;
echo "<br/>";
var_dump($var1);
echo "<br/>";
var_dump($var2);
echo "<br/>";
var_dump($var3);
echo "<br/>";
var_dump($var4);
echo "<br/>";
var_dump($var5);
echo "<br>";
var_dump($var6); // no existe la variable y por eso da el error en navegador

