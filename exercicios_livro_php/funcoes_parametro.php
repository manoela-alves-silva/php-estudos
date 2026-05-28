<!--No PHP, uma função com parâmetro é uma função que recebe valores na hora em que é chamada.
    Esses valores servem para a função trabalhar com dados diferentes sem precisar repetir código.
-->

<?php
    function calcular_total($preco, $quantidade)
    {
        $custo = $preco * $quantidade; // preço vezes a quantidade de produto
        $imposto = $custo * (20 / 100); // para calcular o imposto q é de 20%
        $total = $preco + $imposto; // preço alterado, com os impostos inclusos
        return $total;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funções com parametros</title>

</head>

<body>
    <h1>Loja de maquiagem</h1>
    <p>Batton: $ <?= calcular_total(5, 10) ?></p>
    <p>Mascara para Cílios: $ <?= calcular_total(15, 4) ?></p>
    <p>Base a prova d'agua: $ <?= calcular_total(30, 8) ?></p>
    <p>Agua Micelar: $ <?= calcular_total(25, 7) ?></p>
</body>

</html>