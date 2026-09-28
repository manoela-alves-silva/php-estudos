<?php

    $estoque = 10;

    if ($estoque > 7) {
        $mensagem = 'Produto em estoque';

    }else {
        $mensagem = 'Não temos esse produto em estoque';
    }

    echo $mensagem;
?>