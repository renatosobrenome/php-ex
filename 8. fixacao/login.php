<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="valida.php" method="post">
        <label>Usuário:</label>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
