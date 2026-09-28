<?php
$pessoas = array(
        'nome' => 'Paulo',
        'idade' => 20,
        'pais' => 'Brasil',
        'cidade' => 'Rio de Janeiro'
);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrey_associstivos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <!-- título -->
    <h2 class="mb-4">Pessoas cadastradas</h2>

    <!-- bloco de dados -->
    <div class="bg-white border rounded p-4" style="max-width: 600px;">

        <h5 class="mb-3 border-bottom pb-2">
            Informações do usuário
        </h5>

        <div class="row mb-2">
            <div class="col-4 text-muted">Nome</div>
            <div class="col-8"><?php echo $pessoas['nome']; ?></div>
        </div>

        <div class="row mb-2">
            <div class="col-4 text-muted">Idade</div>
            <div class="col-8"><?php echo $pessoas['idade']; ?> anos</div>
        </div>

        <div class="row mb-2">
            <div class="col-4 text-muted">País</div>
            <div class="col-8"><?php echo $pessoas['pais']; ?></div>
        </div>

        <div class="row">
            <div class="col-4 text-muted">Cidade</div>
            <div class="col-8"><?php echo $pessoas['cidade']; ?></div>
        </div>

    </div>

</div>

</body>
</html>

