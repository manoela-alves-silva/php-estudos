<!-- 
    Podemos remover elementos de um array utilizando a função array_splice.
    Passamos como parametro o array, índice inicial e quantos elementos queremos remover.
    EX: array_splice($carro, 0, 1) remove o elemento de índice 0 do array $carro.
 -->

<?php
// resgatar elementos de um array 

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 1, 2); // remove os elementos de índice 1 e 2 do array $arr, ou seja, os valores 2 e 3. A variavel nao é necessaria, eu poderia apenas fazer array_splice($arr, 1, 2); e pronto. Mas se eu quiser resgatar os elementos removidos, posso armazenar em uma variavel.

print_r($arr); // exibe o array $arr após a remoção dos elementos
echo "<br>";

print_r($removidos); // exibe os elementos removidos do array $arr
echo "<br>";

// remover elementos
?>