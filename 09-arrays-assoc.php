<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Como acceder a un array dentro de otro
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 12315487;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';