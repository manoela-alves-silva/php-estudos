<!-- 
 
    Com a função array_keys recebemos um array apenas com as chaves de arrays.
    Com a função array_values recebemos um array apenas com os valores de arrays.
 -->

<?php

// chaves: ex 'marca', 'motor', 'teto solar', 'cambio', 'portas'
// valores: ex 'BMW', '2.4', true, 'manual', 4


$carro = [
    'marca' => 'BMW',
    'motor ' => '2.4',
    'teto solar' => true,
    'cambio' => 'manual',
    'portas' => 4
];


$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";

$valores = array_values($carro);
print_r($valores);
echo "<br>";


?>