<?php
require_once "usuario.php";
require_once "professor.php";
require_once "aluno.php";

// Caminho do arquivo JSON
$banco = 'banco.json';

// Ler dados existetes
$dados = [];
if (file_exists($banco)) {
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}

// Receber dados do formulário
$tipo = $_POST['tipo'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($tipo === 'professor') {
    $diciplina = $_POST['disciplina'] ?? '';
    $usuario = new Professor($nome, $email, $diciplina);
    $dados['professores'][] = [
        'nome' => $usuario->getNome(),
        'email' => $usuario->getEmail(),
        'disciplina' => $usuario->getDisciplina()
    ];
}

// Salvar de volta no JSON
file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "<h2>Cadastro realizado com sucesso!</h2>";
echo "<a href= 'cadastro.html'>Voltar</a><br>";
echo "<a href= 'index.php'>Ver Usuários<a/a>";
?>