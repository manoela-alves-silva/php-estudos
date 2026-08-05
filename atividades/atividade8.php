<?php

    $a = 33;
    $b = 55;
    $c = "texto1";

    // int menor que 100
    if(is_int($a) || is_float($a)) {

        $mult = $a * 2;

        if($mult > 100) {
            echo "Esse numero é maior que 100";
            echo "<br>";
        } else {
            echo "O numero nao é maior que 100";
        }

    } else {
       echo "Não é um número";
    }
    echo "<br>";


    // int maior que 100
    if(is_int($b) || is_float($b)) {

        $mult = $b * 2;

        if($mult > 100) {
            echo "Esse numero é maior que 100";
            echo "<br>";
        } else {
            echo "O numero nao pode ser maior que 100";
        }

    } else {
        echo "Não é um número";
    }
    echo "<br>";


    // Não é um número e sim uma ‘string’
    if(is_int($c) || is_float($c)) {

        $mult = $c * 2;

        if($mult > 100) {
            echo "Esse numero é maior que 100";
            echo "<br>";
        } else {
            echo "O numero nao pode ser maior que 100";
        }

    } else {
        echo "Não é um número. Esse valor é uma string";
    }
    echo "<br>";
    ?>


