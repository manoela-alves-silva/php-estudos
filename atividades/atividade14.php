<!-- 
    Crie um array associativo com nomes e idades;
    Imprima estes dados em uma tabela de HTML;
-->

<?php
$pessoas = [
    'Manoela' => 22,
    'Tainara' => 22,
    'Diego' => 26,
    'Miguel' => 5
];

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>


<body>

    <table border="1px">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach ($pessoas as $nome => $idade): ?>
            <tr>
                <td> <?= $nome; ?></td>
                <td><?= $idade; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>


</body>

</html>