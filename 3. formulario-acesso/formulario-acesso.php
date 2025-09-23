<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Acesso</title>
</head>
<body>
    <h2>Formulário de Acesso</h2>
    <form action="resultado-formulario-acesso.php" method="post">
        <label>Nome do Usuário:</label>
        <input type="text" name="usuario" required><br><br>

        <label>Nível de Acesso:</label>
        <select name="nivel" required>
            <option value="1">1 - Sistema Completo</option>
            <option value="2">2 - Apenas Cadastro e Consulta</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
