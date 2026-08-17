<!-- Atividade

    Crie um array multidimensional com 3 arrays que tenha 4 elementos cada;
    Imprima todos os elementos de cada um dos arrays;
    Imprima também quando está mudando de array;
-->

<?php


$arr = [
    [1, 2, 3, 4],
    ['carro', 'moto', 'bicicleta', 'ônibus'],
    ['Manoela', 'João', 'Maria', 'José'],
];


// Loop no array externo
for ($i = 0; $i < count($arr); $i++) {

    // imprimindo array 
    echo "Imprimindo arry externo " . ($i + 1) . ":<br>";

    // Loop no array interno
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "<br>";
    }
}


?>