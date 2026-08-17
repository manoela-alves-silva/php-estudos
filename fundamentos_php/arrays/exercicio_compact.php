<!-- 
    Crie variaves com caracteristica de algum objeto ou animal; 
    Depois crie um array com compact com estas mesmas variaves;
    Faça um loop no array e imprima os valores; 
 -->


<?php

$marca = 'farm';
$cor = 'vermelha';
$tamanho = '500ml';
$preco = 100;
$exclusividade = true;

$garrafa_farm = compact('marca', 'cor', 'tamanho', 'preco', 'exclusividade');

print_r($garrafa_farm);
echo '<hr>';

foreach ($garrafa_farm as $garrafa => $value) {

    echo "$garrafa: $value <br>";
}



?>