<?php
session_start();

// Dados fixos de exemplo
$usuario_correto = "admin";
$senha_correta   = "1234";

// Pegando dados do formulário
$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

// Verifica login e senha
if ($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $usuario;

    echo "<h2>Bem-vindo, $usuario!</h2>";
    echo "<h3>Lista de Produtos:</h3>";
    echo "<ul>
            <li>Notebook</li>
            <li>Smartphone</li>
            <li>Fone de Ouvido</li>
            <li>Monitor</li>
            <li>Mouse Gamer</li>
          </ul>";
    echo "<br><a href='logout.php'>Sair</a>";
} else {
    echo "<h2>Confira seus dados</h2>";
    echo "<a href='login.php'>Voltar ao Login</a>";
}
?>
