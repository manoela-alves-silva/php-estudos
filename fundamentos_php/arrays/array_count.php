<?php
// para ver o número de elementos

    $array = [1,2,3];

    echo count($array) . "<br>";

// Também funciona se eu criar um array com range

    $arr = range(1,10);
    echo count($arr) . "<br>";

// Array associativo

    $arr3 = ["nome"=> "Manoela", "idade"=> 22, "Profissao"=> "Estudante"];
    echo count($arr3) . "<br>";