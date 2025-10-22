<?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Data e hora atuais: " . date("d/m/y") . "<br>";
    echo "Hora atual: " . date("H:i:s") . "<br>";
    echo "Daqui a 7 dias: " . date("d/m/y", strtotime("+7 days")) . "<br>";
    echo "Faltam 2 meses e 10 dias: " . date("d/m/y", strtotime("+2 months +10 days")) . "<br>";
    $hoje = new DateTime();
    $natal = new DateTime("2025-12-25");
    $intervalo = $hoje->diff($natal);
    echo "Faltam " . $intervalo->days . " dias para o Natal de 2025.";
?>