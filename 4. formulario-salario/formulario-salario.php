<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Faixa Salarial</title>
</head>
<body>
    <h2>Calcular Desconto por Faixa de Salário</h2>
    <form action="resultado-salario.php" method="post">
        <label>Digite seu salário:</label>
        <input type="number" step="0.01" name="salario" required><br><br>

        <label>Escolha a opção:</label>
        <select name="opcao" required>
            <option value="1">1 - Até R$ 1.045,00</option>
            <option value="2">2 - De R$ 1.045,01 até R$ 2.089,60</option>
            <option value="3">3 - De R$ 2.089,61 até R$ 3.134,40</option>
            <option value="4">4 - De R$ 3.134,41 até R$ 6.101,06</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
