<?php

$edad = 18;

if($edad >= 18){
    echo "¡Ya puedes votar!";
} else {
    $anios_faltantes = 18 - $edad;
    echo "Todavía no puedes votar. Te faltan " . $anios_faltantes . " años.";
}

?>