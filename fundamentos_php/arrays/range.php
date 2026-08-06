<?php

    $arr = range(1, 10);
    print_r($arr);
    echo "<br>";


// Podemos criar independente do início do número e na quantidade que quisermos.

    $arr2 = range(5, 50);
    print_r($arr2);
    echo "<br>";

// Também podemos mudar o step do array. Por exemplo: Podemos criar de 1 a 100, mas a cada 100.

    $arr3 = range(0, 1000,  100);
    print_r($arr3);
    echo "<br>";