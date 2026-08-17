<!--
    Podemos dividir um array grande em diversos arrays de número de elementos iguas;
    Para isso, utilizamos a função array_chunk();
    Passamos o array como argumento e também o número de elementos que cada array deve ter;
 -->


<?php

$arr = range(1, 35); // Cria um array de 1 a 35;
print_r(array_chunk($arr, 5)); // Divide o array em arrays de 5 elementos;
echo "<br>";

echo "<hr>";

// Trasferindo para uma variável:
$arrays = array_chunk($arr, 10); // Vou ter 3 arrays, cada um com 10 elementos;
print_r($arrays);
echo "<br>";

echo "<hr>";

// Se eu pegar um print_r de [1] do $arrays, vou ter o segundo array, que é o array de 10 elementos;
print_r($arrays[1]); // Resultado: Array ( [0] => 11 [1] => 12 [2] => 13 [3] => 14 [4] => 15 [5] => 16 [6] => 17 [7] => 18 [8] => 19 [9] => 20 )


?>