<?php


$arr = ['batata', 'maça', 'pera', 'feijão', 'arroz'];

$removidos = array_splice($arr, 2, 2);

print_r($arr);
echo "<br>";

echo "<hr>";

// mostrar os elementos removidos
print_r($removidos);


?>

<!-- 
    Não é necessario criar uma variavel para usar o array_splice, mas se você quiser resgatar os elementos removidos,
    devesse armazenar em uma variavel e usar o print_r.

-->