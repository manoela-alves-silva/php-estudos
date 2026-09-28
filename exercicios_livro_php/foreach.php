<?php
$melhores_vendas = ['Caneta', 'Lápis', 'Caderno', 'Marcador de texto', 'Mochila'];
?>

<h2>Produtos Disponíveis:</h2>

<table>

    <tr><th class="center">Produto</th></tr>

    <?php foreach ($melhores_vendas as $produtos) { ?>

        <tr><td class="center"><?= $produtos ?></td></tr>

    <?php } ?>
</table>



<?php
$produto = [
    'Caneta' => 1.99,
    'lápis' => 0.99,
    'caderno' => 10.0,
    'marcador de texto' => 5.99,
    'Mochila' => 30.0
]
?>


<h2>Lista de Preço:</h2>

<style>
    h2{
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 300px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #fafafa;
    }

    .center{
        text-align: center;
    }
</style>

<table>
    <tr>
        <th>Item</th>
        <th>Preço</th>
    </tr>

    <?php foreach ($produto as $item => $preco) { ?>
        <tr>
            <td><?= $item ?></td>
            <td>R$ <?= number_format($preco, 2, ',', '.') ?></td>
        </tr>
    <?php } ?>

</table>




