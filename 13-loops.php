<?php include 'includes/header.php';

// While
$i = 0;

while($i < 10){

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
}

// For each
$clientes = array('Pedro', 'Juan', 'Karen'); // tipo de array 1

// foreach ($clientes as $cliente){
//     echo $cliente . "<br>";
// }

foreach($clientes as $cliente):
    echo $cliente . "<br>";
endforeach;

$cliente = [ // Tipo de Array 2
    'nombre' => 'Rodolfo',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor):
    echo $valor . "<br>";
endforeach; 


include 'includes/footer.php';