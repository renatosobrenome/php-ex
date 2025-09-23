<?php
$salario = $_POST['salario'];
$opcao = $_POST['opcao'];
$desconto = 0;
$percentual = 0;

switch ($opcao) {
    case 1:
        $percentual = 7.5;
        break;
    case 2:
        $percentual = 9;
        break;
    case 3:
        $percentual = 12;
        break;
    case 4:
        $percentual = 14;
        break;
    default:
        echo "Opção inválida!";
        exit;
}

$desconto = $salario * ($percentual / 100);
$salario_liquido = $salario - $desconto;

echo "<h2>Resultado</h2>";
echo "Salário informado: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Percentual de desconto: $percentual%<br>";
echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "Salário com desconto: R$ " . number_format($salario_liquido, 2, ',', '.');
?>
