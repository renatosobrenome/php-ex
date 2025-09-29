<?php
// Pegando os dados do formulário
$nome   = $_POST['nome'];
$cidade = $_POST['cidade'];
$email  = $_POST['email'];

// Exibindo os resultados
echo "<h2>Resultado do Formulário</h2>";
echo "Nome: " . htmlspecialchars($nome) . "<br>";
echo "Cidade: " . htmlspecialchars($cidade) . "<br>";
echo "Email: " . htmlspecialchars($email);
?>
