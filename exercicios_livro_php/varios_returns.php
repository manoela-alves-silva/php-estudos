<?php
    $estoque = 10;

    function receberber_menssagem_estoque($estoque)
    {
        if ($estoque >= 10) {
            return 'Boa disponibilidade';
        }
        if ($estoque >0 and $estoque < 10) {
            return 'Estoque baixo';
        }
        return 'Fora de estoque';
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aceitando e Retornando Diversos Valores</title>
</head>

<body>
<h1> Usando vários returns em uma função </h1>
<hr>

    <h3>Memoria ram</h3>
    <p><?= receberber_menssagem_estoque($estoque) ?></p>


</body>

</html>
