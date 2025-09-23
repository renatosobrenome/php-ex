<?php
// Pega os dados do formulário
$usuario = $_POST['usuario'];
$nivel = $_POST['nivel'];

echo "<h2>Resultado do Acesso</h2>";
echo "Usuário: <strong>$usuario</strong><br><br>";

// Verifica o nível de acesso
if ($nivel == 1) {
    echo "✅ Sistema Completo Liberado!";
} elseif ($nivel == 2) {
    echo "⚠️ Apenas Cadastro e Consulta estão liberados.";
} else {
    echo "❌ Nível de acesso inválido.";
}
?>
