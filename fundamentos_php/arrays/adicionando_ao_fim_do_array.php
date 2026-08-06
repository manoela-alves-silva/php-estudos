<?php

    $arr = [1,2,3];

    $arr[] = 4;

    print_r($arr);
    echo "<br>";

    $arr[] = 5;

    print_r($arr);
    echo "<br>";

// No array 2 eu vou ter o numero 1 no índice 0 pq ele nao tinha elementos na lista.
    $arr2 = [];
    $arr2[] = 1;

    print_r($arr2);
    echo "<br>";


// array associativo vamos ter somente a criação da chave porque ele não conta com o número de índice.
    $arr3 = [];
    $arr3['teste'] = 'testando';

    print_r($arr3);
    echo "<br>";