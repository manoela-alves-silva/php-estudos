<!-- Uma função é exatamente: um "pacotinho" de código que faz uma tarefa específica. 
     Você dá algumas informações para ela, ela faz um trabalho com isso, e te dá um resultado. 
-->
<?php 
function escrever_logo() 
{
    echo '<img src="img/logo2.png" alt="Logo" style="width: 150px">';
}

function escrever_copyright() {
    $ano = date('y'); // obtem e armamzena o ano corrente
    echo '&copy; ' . $ano; // Escreve nota de copyrigh
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funções</title>
</head>

<body>
    <h1 style="text-align: center">Testando funções básicas:</h1>
    <hr>
    <head>
        <h1><?= escrever_logo(); ?> loja original</h1>
    </head>

    <article>
        <h2>Bem vindo a loja Original</h2>
    </article>

    <footer>
        <?= escrever_logo(); ?>
        <?= escrever_copyright(); ?>
        loja original
    </footer>

    <hr>

    <?php
    function escrever_logoo()
    {
        echo '<img src="img/logo2.png" alt="Logo" style="width: 150px">';
    }

    function escrever_copyrightt() {
        $ano = date('y'); // obtem e armamzena o ano corrente
        $mensagem = '&copy; ' . $ano; // Escreve nota de copyrigh
        return $mensagem;
    }
    ?>

    <h1>Funções que retornam mensagens com RETURN</h1>

    <head>
        <h1><?= escrever_logoo(); ?> loja original</h1>
    </head>

    <article>
        <h2>Bem vindo a loja Original</h2>
    </article>

    <footer>
        <?= escrever_logoo(); ?>
        <?= escrever_copyrightt(); ?>
        loja original
    </footer>

    <hr>


</body>


</html>