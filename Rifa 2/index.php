<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio Rifa</title>
    <link rel="stylesheet" href="sorteio.css">
</head>
<body>
    <h1>Bem-vindo ao Sorteio da Rifa!</h1>

    <form action="sorteio.php" method="post">
        <label for="nome">Nome do Participante:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="premios">Escolha um prêmio:</label><br>
        <select name="premios" id="premios" required>
            <option value="Bicicleta">Bicicleta</option>
            <option value="Smartphone">Smartphone</option>
            <option value="Tablet">Tablet</option>
            <option value="Fone de Ouvido">Fone de Ouvido</option>
            <option value="Vale Compras">Vale Compras</option>
        </select><br><br>

        <label for="intervalo">Escolha o intervalo das rifas:</label><br>
        <select name="intervalo" id="intervalo" required>
            <option value="100">01 a 100</option>
            <option value="300">01 a 300</option>
            <option value="500">01 a 500</option>
            <option value="1000">01 a 1000</option>
        </select><br><br>

        <button type="submit">Sortear</button>
    </form>

    <div class="footer">
        <img src="https://usagif.com/wp-content/uploads/funny-celebrate-56.gif" alt="Sorteio" class="imagem-footer">
        <p>Boa sorte a todos os participantes!</p>
    </div>
</body>
</html>
