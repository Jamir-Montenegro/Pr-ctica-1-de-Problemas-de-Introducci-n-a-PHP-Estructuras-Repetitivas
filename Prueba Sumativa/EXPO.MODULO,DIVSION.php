<?php

// 4. DIVISIÓN 
echo "<h2>4. DIVISIÓN</h2>";

$cantidad = 20;
$personas = 4;

if($personas != 0) {
    $resultado = $cantidad / $personas;
    echo "Cantidad total: $cantidad<br>";
    echo "Número de personas: $personas<br>";
    echo "Cada persona recibe: $resultado";
} else {
    echo "Error: No se puede dividir entre cero";
}


// 5. MÓDULO 
echo "<h2>5. MÓDULO (%)</h2>";

$numeros = [10, 15, 20, 25, 30];

echo "Números pares:<br>";
for($i = 0; $i < count($numeros); $i++) {
    if($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . ",";
    }
}


// 6. EXPONENCIACIÓN 
echo "<h2>6. EXPONENCIACIÓN (**)</h2>";

$base = 2;
$exponentes = [1, 2, 3, 4, 5];

echo "Potencias de 2:<br>";
for($i = 0; $i < count($exponentes); $i++) {
    $resultado = $base ** $exponentes[$i];
    echo "2^{$exponentes[$i]} = $resultado<br>";
}


