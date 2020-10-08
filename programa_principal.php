<?php

include 'operaciones.php';

$operacion = new Operaciones();
$factorial = $operacion->factorial(5);
echo "El factorial es: ".$factorial;

echo "<br>";
$potencia = $operacion->potencia(5, 2);
echo "El resultado de la potencia es: ".$potencia;

?>