<!-- 
    Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar a função 'arsort';
    Se quisermos ordenar o array pelas chaves, utilizamos o valor 'ksort';
-->

<?php

$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

asort($arr);

print_r($arr); // a partir daqui terei um array crescente pela chave. 
echo "<br>";


$arr2 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];

arsort($arr2);

print_r($arr2); // A partir daqui, eu terei um array decrescente. 
echo "<br>";



// ordenar o array a partir das chaves 
$arr3 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];

ksort($arr3);

print_r($arr3); // ordenando em ordem alfabetica crescente as chaves 
echo "<br>";





$arr4 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];

krsort($arr4);

print_r($arr4); // ordenando em ordem alfabetica decrescente as chaves 
echo "<br>";


?>