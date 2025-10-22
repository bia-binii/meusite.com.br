<?php
date_default_timezone_set('America/Sao_Paulo');

// Receber dados do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$premio = isset($_POST['premios']) ? $_POST['premios'] : '';
$intervalo = isset($_POST['intervalo']) ? intval($_POST['intervalo']) : 100;

// Arquivo para armazenar ganhadores
$arquivoGanhadores = 'ganhadores.json';
$ganhadores = file_exists($arquivoGanhadores) ? json_decode(file_get_contents($arquivoGanhadores), true) : [];

// Lista de números disponíveis (não sorteados para o mesmo participante)
$numerosDisponiveis = range(1, $intervalo);

// Verifica se o participante já ganhou algum prêmio
$participanteGanhou = false;
foreach ($ganhadores as $g) {
    if ($g['nome'] === $nome) {
        $participanteGanhou = true;
        break;
    }
}

// Sorteio
$numeroSorteado = rand(1, $intervalo);
$ganhou = !$participanteGanhou; // Se já ganhou, não pode ganhar de novo

if ($ganhou) {
    // Adicionar participante à lista de ganhadores
    $ganhadores[] = [
        'nome' => $nome,
        'premio' => $premio,
        'numero' => $numeroSorteado,
        'data' => date('d/m/Y H:i:s')
    ];
    file_put_contents($arquivoGanhadores, json_encode($ganhadores, JSON_PRETTY_PRINT));
}

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
        <p><strong>Número sorteado:</strong> <?= $numeroSorteado ?></p>
        <p><strong>Prêmio:</strong> <?= htmlspecialchars($premio) ?></p>
        <hr>

        <?php if ($ganhou): ?>
            <p class="ganhou">Parabéns, <?= htmlspecialchars($nome) ?>! Você ganhou o prêmio: <?= htmlspecialchars($premio) ?> 🎁</p>
            <img src="https://i.pinimg.com/originals/8e/d3/b9/8ed3b92296e33c3785458d3b2c79a48d.gif" alt="Ganhou" class="imagem-resultado">
        <?php else: ?>
            <p class="perdeu">Que pena, <?= htmlspecialchars($nome) ?>! Você já ganhou um prêmio anteriormente.</p>
            <img src="https://imagens.net.br/wp-content/uploads/2024/06/gifs-tristes-que-expressam-emocoes-profundas-1.gif" alt="Perdeu" class="imagem-resultado">
        <?php endif; ?>

        <hr>
        <p><strong>Data e Hora do Sorteio:</strong> <?= date('d/m/Y H:i:s') ?></p>
    </div>

    <h2>Lista de Ganhadores</h2>
    <div class="resultado">
        <?php if (!empty($ganhadores)): ?>
            <ul>
                <?php foreach ($ganhadores as $g): ?>
                    <li><strong><?= htmlspecialchars($g['nome']) ?></strong> - <?= htmlspecialchars($g['premio']) ?> (Número: <?= $g['numero'] ?>) - <?= $g['data'] ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum ganhador ainda.</p>
        <?php endif; ?>
    </div>

    <br>
    <form action="index.php" method="get">
        <button type="submit" class="botao">Sortear Novamente</button>
    </form>
</body>
</html>
