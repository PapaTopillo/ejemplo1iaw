<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Primera pagina</h2>
    </center>
    <hr />
    <?php
    //Comentario de una sola linea
    echo "Hola Mundo<br/>"; //Imprime en pantalla br es salto de linea
    echo 'Adios Mundo<br/>Hola otra vez<br/>'; //Imprime en pantalla br es salto de linea
    echo "<i>Una linea más</i>"; // <i> es cursiva
    echo "<hr/>"; // <hr/> es una linea horizontal
    echo "<br/>"; // <br/> es salto de linea
    /* 
            Comentario
            de varias
            lineas 
        */
    ?>
    <hr />
    <?php echo "<br/> esto es un bloque nuevo"; ?>
    <!-- Bloque abreviado de PHP -->
    <?= "<br/> Bloque abreviado porque solo tiene un echo"; ?>
    <hr />
    <?php 
        // Variables en PHP
        $numero1=8; // Variable entera
        $numero2=2; // Variable entera
        $resultado=$numero1+$numero2; // Suma de variables
        echo "<br/> La suma de $numero1 y $numero2 es: $resultado"; // Imprime la suma con comillas dobles
        echo '<br/> La suma de $numero1 y $numero2 es: $resultado'; // No interpreta variables por las comillas simples
        echo "$numero3"; // No da error pero no imprime nada porque no existe la variable
    ?>
</body>

</html>