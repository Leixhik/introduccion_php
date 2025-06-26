<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

// If anidados
$cliente = [
    'nombre' => 'Rodolfo',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br>";

if ( !empty($cliente)){
    echo "El arreglo de cliente no está vacío";
    echo "<br>";

    if( $cliente['saldo']> 0){
        echo "El saldo del cliente es: $" . $cliente['saldo'];
    } else{
        echo "El cliente " . $cliente['nombre'] . " no tiene saldo";
    }
} else {
    echo "El arreglo de cliente está vacío";
}

echo "<br>";

// else-if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El Clienten es Premium";
} else {
    echo "No hay cliente definido, no tiene saldo o no es premium";
}

echo "<br>";

// Switch.
$tecnologia = 'JavaScript';

switch ($tecnologia){
    case 'PHP':
        echo "PHP es un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo "Esto no es un lenguaje de programación como tal :0";
        break;
    default:
        echo "Algún lenguaje que no se cuál es";
        break;
}

include 'includes/footer.php';