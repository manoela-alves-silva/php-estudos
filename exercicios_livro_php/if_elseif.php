<?php

    $estoque = 6;
    $encomenda = 5;

    if($estoque > 7){
        $mensagem = 'Esse produto esta em estoque';

    } elseif ($encomenda < 6){
        $mensagem = 'Esse produto chega em breve';
    } else {
        $mensagem = 'Esse produto nao esta em estoque';
    }

    echo $mensagem;
?>
