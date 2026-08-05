<?php

    $operacao = "5" * 12;
    echo $operacao . "<br>";

    echo gettype($operacao); // A multiplicação de uma ‘string’ com um int vira int

    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(1.2);
    echo "<br>";
    echo gettype("teste");

    // gettype diz o tipo de dado