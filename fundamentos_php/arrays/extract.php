<!--
    Com a funçao extract podemos criar variaveis rapidamente a partir de arryas associativos;
    O nome da chave será o nome da variavel;
    Se houver uma variavel já criada com o nome da chave, a mesma será sobrescrita; 
 -->

<?php

$arr = [
    'cor' => 'azul',
    'forma' => 'quadrada',
    'material' => 'madeira'
];

extract($arr);
echo $cor . '<br>';
echo $forma . '<br>';
echo $material . '<br>';

// sobrescrerver uma variavel 
echo '<hr>';

$nome = "Manoela";
echo $nome . '<br>';


$pessoa = [
    'nome' => 'Rafaela',
    'idade' => 36
];

extract($pessoa);

echo $nome . '<br>';
echo $idade . '<br>';


?>