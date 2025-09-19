<?php
function conecta($usuario, $senha) {
    if ($usuario === "admin" && $senha === "1234"){
        header("location: painel.php");
        exit;
    } else {
        // Codifoca a mensagem para evitar problemas com acentuação
        $msg = urldecode("Usuário ou senha invalidos!");
        header("location: index.php?msg=$msg");
        exit;
    }
}
?>