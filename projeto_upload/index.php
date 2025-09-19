<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Galeria de Imagens</h1>
    <a href="upload.php">enviar nova imagem</a>
    <hr>

    <h2>Imagens enviadas</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
        <?php
            $pasta = "uploads/";
            if (is_dir($pasta)) {
                $arquivo = scandir($pasta);
            foreach($arquivo as $arquivo) {
                if($arquivo != '.' && $arquivo !== '..'){
                    echo '<div style="border: 1px solid #ccc; padding: 10px;">
                            <img src="'. $diretorio . $arquivo . '" style= border 1px solid #ccc;">
                            </div>';
                }
            }        
        } else {
            echo "nenhuma imagem enviada ainda.";
        }
         ?>
        </div>
</body>
</html>