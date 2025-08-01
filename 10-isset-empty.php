<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - Revisa si un arreglo está vacio.
var_dump( empty($clientes));
var_dump( empty($clientes3));
var_dump( empty($clientes2));

echo "<br>";

// Isset - Revisar si un arreglo está creado o una propiedad está definida.
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

echo "<br>";

// Isset - Permite revisar si una propiedad de un arreglo asociativo existe.
var_dump(( isset($cliente['nombre'])));
var_dump(( isset($cliente['codigo'])));


include 'includes/footer.php';