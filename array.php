<?php
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];
    echo $frutas [0]; // Maçã
    
   // for($i = 0; $i < count ($frutas); $i++){
   // echo "fruta ". $i+1 . ": " . $frutas [$i] . "<br>";
//}

$i =0;
for($i = 0; $i <= 3; $i++){
    $n = $i +1;
    echo "Fruta $n: $frutas[$i]<br>";
}
?>