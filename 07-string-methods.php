<?php include 'includes/header.php';

$nombreCliente = "Rodolfo Leija";

// Conocer extensión de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertir a mayúsculas
echo strtoupper($nombreCliente);

// Convertir a minúsculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Rodolfo', 'R', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Rodolfo');

$tipoCliente = "Premium";

echo "<br/>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

include 'includes/footer.php';