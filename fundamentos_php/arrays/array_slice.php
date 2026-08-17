<!-- 
    Com a funçao array_slice podemos resgatar uma faixa de elementos de um array;
    Passamos 3 parâmetros: o array, o índice inicial e a quantidade de elementos que queremos resgatar a partir do indice;
 -->

<?php

$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

$slice1 = array_slice($arr, 1, 3); // 4 é o indice 1 e 3 é a quantidade de elementos que queremos resgatar a partir do indice 1;
print_r($slice1); // Resultado: Array ( [0] => 4 [1] => 6 [2] => 8 )
echo "<br>";

echo "<hr>";

$slice2 = array_slice($arr, 4, 4); // 10 é o indice 4 e 4 é a quantidade de elementos que queremos resgatar a partir do indice 4. Quero ate o 16;
print_r($slice2); // Resultado: Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 )
echo "<br>";


// Ele também tem a funçao parecida com a substr: que se eu vou omitir o indice final, vamos pegar toda a parte do indice inicial;

$slice3 = array_slice($arr, 4);
print_r($slice3); // Resultado: Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 [4] => 18 ) 10 é o indice 4 e como não passamos a quantidade de elementos, ele vai pegar todos os elementos a partir do indice 4;
echo "<br>";


// indice negativo: ele vai contar de tras pra frente, ou seja, o -1 é o ultimo elemento do array, o -2 é o penultimo elemento do array e assim por diante;

$slice4 = array_slice($arr, 4, -3); // 10 é o índice inicial, vou tirar 3 elementos do final, ou seja, vou pegar o 10 e 12;
print_r($slice4); // Resultado: Array ( [0] => 10 [1] => 12)
echo "<br>";
