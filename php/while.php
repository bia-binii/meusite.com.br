<?php
echo "Este é um while <br>";
    $contador = 1;
        while ($contador <= 5) {
            echo "Número: $contador<br>";
            $contador++;
    }
//Vê a lógica e roda mesmo assim (é como perguntar antes de agir).

echo "Este é um do while";
$contador = 1;
    do {
    echo "Número: $contador<br>";
    $contador++;
    }while ($contador <= 5);
//Roda porem se detectar algo de errado para na hora(é como agir antes de perguntar).