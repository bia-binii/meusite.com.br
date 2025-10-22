<?php
// Exibe informações do servidor e do ambiente
echo "<h2>Informações do Servidor e do Ambiente</h2>";

$ip = $_SERVER['SERVER_ADDR']; // IP do usuario
$navegador = $_SERVER['HTTP_USER_AGENT']; // Navegador e sistema operacional
$servidor = gethostname(); // Nome do servidor
$versaoPHP = phpversion(); // Versão do PHP instalada

echo "IP do usuário: " . $ip . "<br>";
echo "Navegador: " . $navegador . "<br>";
echo "Servidor: " . $servidor . "<br>";
echo "Versão do PHP: " . $versaoPHP . "<br>";