<?php
// buscas.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "empresa";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

function mostrarTabela($title, $result) {
    echo "<h3>$title</h3>";
    if (!$result || $result->num_rows === 0) {
        echo "Nenhum registro encontrado.<br>";
        return;
    }
    echo "<table border='1' cellpadding='6' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Salário</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($row['telefone']) . "</td>";
        echo "<td>R$ " . number_format($row['salario'], 2, ',', '.') . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}

// 1
$sql1 = "SELECT nome, telefone, salario, id FROM colaboradores";
$res1 = $conn->query($sql1);
mostrarTabela("1) Nome, Telefone e Salário", $res1);

// 2
$sql2 = "SELECT * FROM colaboradores ORDER BY nome ASC";
$res2 = $conn->query($sql2);
mostrarTabela("2) Colaboradores ordenados por nome (ASC)", $res2);

// 3
$sql3 = "SELECT * FROM colaboradores WHERE nome LIKE '%Silva%'";
$res3 = $conn->query($sql3);
mostrarTabela("3) Colaboradores com sobrenome Silva", $res3);

$conn->close();
?>
