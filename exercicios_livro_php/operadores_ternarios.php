<?php

//Operadores ternários: servem para decisões simples, atribuir valores rapidamente e deixar o código mais compacto


    echo '<h3> Exemplo com if: </h3>';

    $idade_if = 17;
        if ($idade_if >= 18) {
            $mensagem = 'Maior de idade';
        } else {
            $mensagem = 'Menor de idade';
        }
    echo $mensagem;

    echo '<hr />';


// Operadores ternários:

    echo '<h3> Exemplo com operadores ternários: </h3>';

    $idade_ot = 20;

    $mensagem = $idade_ot >= 18
        ? 'Maior de idade' // esse equivale ao if.
        : 'Menor de idade'; // esse equivale ao else.
    echo $mensagem;


    echo '<hr />';

    echo '<pre>';
    print_r([
        $idade_if,
        $idade_ot,
    ]);
    echo '</pre>';

?>