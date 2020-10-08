<?php

include 'operaciones.php';

$operacion = new Operaciones();
$factorial = $operacion->factorial(5);
echo "El factorial es: ".$factorial;

echo "<br>";
$factorial1 = $operacion->factorial(5);
echo "El factorial es: ".$factorial1;

echo "<br>";
$potencia = $operacion->potencia(5, 2);
echo "El resultado de la potencia es: ".$potencia;

echo "<br>";
$sumatorio = $operacion->sumatorio(5);
echo "El sumatorio es: ".$sumatorio;

echo "<br>";
$sumatorio1 = $operacion->sumatorio1(5);
echo "El sumatorio es: ".$sumatorio1;

echo "<br>";
$sumatorio2 = $operacion->sumatorio2(5);
echo "El sumatorio es: ".$sumatorio2;

?>