<?php
echo 'Hola Mundo';

 
$numero = 10;
if ($numero > 5) {
    echo "El numero es mayor que 5";
} else {
    echo "El número es menor o igual a 5";
}
 
function muestraMensaje() {
    echo "Hola, Mundo!";
}

try {
    $result = $x / $y;
} catch (Exception $e) {
    // Manejamos el error aquí
    echo 'Ha ocurrido un error:'. $e->getMessage() ;
}


$numero = "10";
$entero = (int) $numero; // $entero es 10;