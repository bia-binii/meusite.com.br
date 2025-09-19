<?php
file_put_contents("log.text",
"Usuário acessou em " .
date("d/m/Y H:i:s") .
"\n", FILE_APPEND);
?>