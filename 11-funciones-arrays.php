<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // Ordena por valores (Orden alfabético)
arsort($cliente); // Ordena por valores (Z primero)
ksort($cliente); // Ordena por llaves (Oren alfabético)
krsort($cliente); // Ordena por llaves inverso (Oren alfabético inverso)

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';