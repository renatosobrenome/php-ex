<?php
// fixacao1.php

// Lista de produtos (exemplo)
$produtos = [
    [
        "codigo" => 101,
        "descricao" => "Arroz 5kg",
        "estoque" => 50,
        "vendido" => 12,
        "preco" => 25.90
    ],
    [
        "codigo" => 102,
        "descricao" => "Feijão 1kg",
        "estoque" => 80,
        "vendido" => 30,
        "preco" => 8.50
    ],
    [
        "codigo" => 103,
        "descricao" => "Macarrão 500g",
        "estoque" => 100,
        "vendido" => 45,
        "preco" => 4.20
    ]
];

echo "<h2>Lista de Compras</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Total em Estoque</th>
        <th>Quantidade Vendida</th>
        <th>Quantidade Atual</th>
        <th>Preço (R$)</th>
        <th>Total de Vendas (R$)</th>
      </tr>";

// Percorrendo os produtos
foreach ($produtos as $p) {
    $quantidade_atual = $p["estoque"] - $p["vendido"];
    $total_vendas = $p["vendido"] * $p["preco"];

    echo "<tr>";
    echo "<td>" . $p["codigo"] . "</td>";
    echo "<td>" . $p["descricao"] . "</td>";
    echo "<td>" . $p["estoque"] . "</td>";
    echo "<td>" . $p["vendido"] . "</td>";
    echo "<td>" . $quantidade_atual . "</td>";
    echo "<td>R$ " . number_format($p["preco"], 2, ',', '.') . "</td>";
    echo "<td>R$ " . number_format($total_vendas, 2, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
