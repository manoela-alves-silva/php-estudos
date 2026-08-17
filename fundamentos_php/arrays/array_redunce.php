<!-- 
    A funçao array_reduce tem como objetivo reduzir um array a apenas um valor;
    Podemos passar uma segunda funçao como parametro, para algum processo ser executado;
    EX: array_redunce($arr, $funcao);
 -->


<?php

$arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

function soma($a, $b)
{

    return $a + $b;
}


$resultado = array_reduce($arr, "soma");
echo "$resultado <br>";


?>