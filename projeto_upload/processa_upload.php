<?php
    if (issets($_FILES["arquivo"])) && $_FILES["arquivo"]["error"] == 0 {
        $nome_arquivo = $_FILES["arquivo"]["name"];
        $caminhoCompleto = $pastaDestino["arquivo"]["tmp_name"];

        $tipoArquivo = strtolower(pathinfo($caminhoCompleto, PATHINFO_EXTENSION));
        $tiposPermiridos = array("jpg", "jpeg", "png", "gif");

        if(in_array($tipoArquivo, $tiposPermiridos)){
            if(move_uploaded_file($_FILES["arquivo"]["tpm_name"], $caminhoCompleto)){
                echo "Arquivo enviado com sucesso";
            } else {
                echo "Erro ao enviar o arquivo";
            }
        } else {
            echo "Tipo de arquivo não permitido. Apenas JPG, JPEG, PNG E GIF são aceitos";
        }
    }    