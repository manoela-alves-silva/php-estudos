<?php
$melhores_doces = [
    'chocolate', 'm&m', 'mentos', 'nutella',
    'sorvete', 'cookie', 'marshmallows'
];
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreys associativos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color: #fff5f8;">

<div class="container mt-5">

    <!-- Título -->
    <h1 class="text-center mb-4" style="color: #d63384;">
        🍬 Loja de Doces
    </h1>

    <!-- Card -->
    <div class="d-flex justify-content-center">

        <div class="card shadow-lg p-4 border-0"
             style="width: 24rem; border-radius: 20px; background-color: #fff0f6;">

            <h3 class="text-center mb-3" style="color: #ff69b4;">
                🍩 Melhores doces
            </h3>

            <ul class="list-group list-group-flush">

                <li class="list-group-item" style="background-color: #fff0f6;">
                    🍫 <?php echo $melhores_doces[3]?>
                </li>

                <li class="list-group-item" style="background-color: #fff0f6;">
                    🍬 <?php echo $melhores_doces[4]?>
                </li>

                <li class="list-group-item" style="background-color: #fff0f6;">
                    🍭 <?php echo $melhores_doces[0]?>
                </li>

            </ul>

            <div class="text-center mt-4">
                <a href="arrey_multidimensionais.php" class="btn btn-outline-danger px-4 py-2">
                    Ver preços
                </a>
            </div>

        </div>

    </div>

</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>
