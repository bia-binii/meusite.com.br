<?php
date_default_timezone_set('America/Sao_Paulo');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$numeroEscolhido = isset($_POST['numeroescolhido']) ? intval($_POST['numeroescolhido']) : 0;
$premios = isset($_POST['premios']) ? $_POST['premios'] : '';

$numeroSorteado = rand(1, 1000);

$ganhou = ($numeroEscolhido === $numeroSorteado);

$ip = $_SERVER['REMOTE_ADDR'];
$dataHora = date('d/m/Y H:i:s');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Sorteio</title>
    <link rel="stylesheet" href="sorteio.css">
</head>
<body>
    <h1>Resultado do Sorteio</h1>

    <div class="resultado">
        <p><strong>Participante:</strong> <?= htmlspecialchars($nome) ?></p>
        <p><strong>Seu número:</strong> <?= $numeroEscolhido ?></p>
        <p><strong>Número sorteado:</strong> <?= $numeroSorteado ?></p>
        <hr>

        <?php if ($ganhou): ?>
            <p class="ganhou">Parabéns, <?= htmlspecialchars($nome) ?>! Você ganhou o prêmio: <?= htmlspecialchars($premios) ?> 🎁</p>
            <img src="https://i.pinimg.com/originals/8e/d3/b9/8ed3b92296e33c3785458d3b2c79a48d.gif" alt="Ganhou" class="imagem-resultado">
        <?php else: ?>
            <p class="perdeu">Que pena, <?= htmlspecialchars($nome) ?>! O número sorteado foi <?= $numeroSorteado ?> e o prêmio foi <?= htmlspecialchars($premios) ?>.</p>
            <img src="https://imagens.net.br/wp-content/uploads/2024/06/gifs-tristes-que-expressam-emocoes-profundas-1.gif" alt="Perdeu" class="imagem-resultado">
        <?php endif; ?>

        <hr>
        <p><strong>Data e Hora do Sorteio:</strong> <?= $dataHora ?></p>
        <p><strong>Endereço IP do Participante:</strong> <?= $ip ?></p>
    </div>

    <br>
    <form action="index.php" method="get">
        <button type="submit" class="botao">Sortear Novamente</button>
    </form>
</body>
</html>