<!-- 
    Para ordenar em ordem crescente podemos utilizar a funçao 'sort' em um array;
    Para ordenar de forma inversa utilizamos 'rsort';
-->


<?php

$arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

sort($arr);

print_r($arr); // a partir daqui, eu já tenho um novo array ordenado de forma crescente.
echo "<br>";

$arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

rsort($arr2);

print_r($arr2); // a partir daqui, eu já tenho um novo array ordenado de forma decrescente.
echo "<br>";


// organizar em ordem alfabetica 

$nomes = ["Maria", "Aron", "Joao", "José", "Matheus"];

sort($nomes);

print_r($nomes); // a partir daqui eu tenho um novo array, organizado de forma alfabetica.
echo "<br>"


?>