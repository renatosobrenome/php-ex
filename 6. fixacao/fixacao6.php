<?php
// Array com 10 clientes
$clientes = [
    "Carlos",
    "Ana",
    "Bruna",
    "Marcos",
    "Felipe",
    "Daiana",
    "Roberto",
    "Julia",
    "Fernanda",
    "Gabriel"
];

// Exibe quantidade de clientes
echo "<h2>Lista de Clientes</h2>";
echo "Quantidade de clientes: " . count($clientes) . "<br><br>";

echo "<strong>Lista Original:</strong><br>";
foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}

// Ordena em ordem alfabética
sort($clientes);

echo "<br><strong>Lista em Ordem Alfabética:</strong><br>";
foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}
?>
