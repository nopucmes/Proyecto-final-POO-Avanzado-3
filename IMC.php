<?php

 
$peso="peso";
$altura="altura";
function IMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}
echo "Peso en Kilos:";
$peso= (readline("peso:"));

echo "Altura en metros";
$altura =(readline("altura"));

//calcular IMC
$imc = IMC($peso, $altura);

echo "El IMC es: " . $imc;

?>