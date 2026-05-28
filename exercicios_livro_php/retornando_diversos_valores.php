<?php
    $br_preco = 4;
    $taxas = [
        'uk' => 3.00,
        'eu' => 5.00,
        'jp' => 2.00,
    ];

    function calcular_diversos_valores($brl, $taxas_de_cambio) {
        $precos = [
            'libra' => $brl * $taxas_de_cambio['uk'],
            'euro' => $brl * $taxas_de_cambio['eu'],
            'yen' => $brl * $taxas_de_cambio['jp'],

        ];
        return $precos;
    }

    $precos_globais = calcular_diversos_valores($br_preco, $taxas);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aceitando e Retornando Diversos Valores</title>
</head>

<body>
    <h1> Aceitando e Retornando Diversos Valores </h1>

    <div>
            <h3>Chocolates</h3>

            <p>BR $<?= $br_preco ?></p>

            <P>
                (UK £ <?= $precos_globais['libra'] ?> |
                    EU &euro; <?= $precos_globais['euro'] ?> |
                    JP &yen; <?= $precos_globais['yen'] ?>)
            </P>
    </div>
</body>

</html>
