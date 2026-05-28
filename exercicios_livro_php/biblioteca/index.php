<?php
    $estoque = 6;

    if ($estoque >= 10) {
        $mensagem = "Produto encontrado com sucesso!";
    }
    if ($estoque > 0 and $estoque < 10) {
        $mensagem = "Estoque baixo, mas temos algumas unidades disponíveis!";
    }
    if ($estoque == 0) {
        $mensagem = "Fora de estoque";
    }
?>

<?php require_once "header.php"; ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
</head>

<h2>Qual livro você deseja?</h2>
<p><strong>Um defeito de cor</strong></p>
<P> <?php echo $mensagem ?></P>
<hr>
<?php require_once "footer.php"; ?>
