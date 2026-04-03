<?php

// 1. SUMA 
echo "<h2>1. SUMA</h2>";

$numeros = [5, 3, 8, 2];
$suma = 0;

for($i = 0; $i < count($numeros); $i++) {
    $suma = $suma + $numeros[$i];
}

echo "Números: " . implode(", ", $numeros) . "<br>";
echo "Suma total: $suma";


// 2. RESTA 
echo "<h2>2. RESTA</h2>";

$saldo = 100;
$gastos = [20, 15, 10];

for($i = 0; $i < count($gastos); $i++) {
    $saldo = $saldo - $gastos[$i];
}

echo "Saldo inicial: 100<br>";
echo "Gastos: " . implode(", ", $gastos) . "<br>";
echo "Saldo final: $saldo";


// 3. MULTIPLICACIÓN (*)
echo "<h2>3. MULTIPLICACIÓN</h2>";

$precios = [10, 5, 3];
$cantidades = [2, 4, 1];
$total = 0;

for($i = 0; $i < count($precios); $i++) {
    $subtotal = $precios[$i] * $cantidades[$i];
    $total = $total + $subtotal;
}

echo "Precios: " . implode(", ", $precios) . "<br>";
echo "Cantidades: " . implode(", ", $cantidades) . "<br>";
echo "Total a pagar: $total";


