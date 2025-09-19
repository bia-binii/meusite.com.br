<?php
/*
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

function media($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) / 3;
    echo "Sua média é: " . $media;
}

media($n1, $n2, $n3);
*/

//Função para calcular a média
function media($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

//Verificar se os valores foram enviados via POST
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $n3 = $_REQUEST['n3']; 
    $resultado = media($n1, $n2, $n3);

    echo "<h2>Resultado da Media</h2>";
    echo "Os números digitados foram: $n1, $n2 e $n3 <br>";
    echo "A média é: <strong>" .
    number_format ($resultado, 2, ',','.') . "</strong>";
} else {
    echo "Nenhum valor enviado.";
}
?>