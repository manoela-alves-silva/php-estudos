<?php
$itens = 10;
$custos = 50;

// custo real dos pedidos
$subtotal = $custos * $itens;

// conta para achar  um preço para vender cada o produto
$imposto = ($subtotal / 100) * 20; // '20' é a % do imposto.

$total = $subtotal + $imposto; // preço dos produtos com o imposto.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Carrinho Amazon</title>
</head>


<body class="bg-light">

<!-- CONTAINER PRINCIPAL -->
<div class="container-fluid">

    <!-- TOPO DA PÁGINA -->
    <div class="bg-dark text-white p-3 text-center">
        <h1>Carrinho Amazon</h1>
    </div>

    <!-- linha PRINCIPAL -->
    <div class="row mt-4">

        <!-- COLUNA ESQUERDA -->
        <div class="col-8">
            <div class="bg-white p-4 shadow-sm rounded">
                <h3 class="mb-4">Produtos do Carrinho</h3>

                <!-- PRODUTO -->
                <div class="border-bottom pb-3 mb-3">
                    <h5>Livros</h5>
                    <p>Quantidade :$<?= $itens ?></p>
                    <p>Valor :$<?= $custos ?></p>
                </div>
            </div>
        </div>

        <!-- COLUNA DIREITA -->
        <div class="col-4">
            <div class="bg-white p-4 shadow-sm rounded">
                <h4 class="mb-4">
                    Resumo da Compra
                </h4>

                <!-- SUBTOTAL -->
                <div class="d-flex justify-content-between mb-3">
                    <span>Subtotal</span>
                    <strong>$<?= $subtotal ?></strong>
                </div>

                <!-- IMPOSTO -->
                <div class="d-flex justify-content-between mb-3">
                    <span>Impostos</span>
                    <strong>$<?= $imposto ?></strong>
                </div>

                <!-- TOTAL -->
                <div class="d-flex justify-content-between mb-4">
                    <span>Total</span>
                    <strong>$<?= $total ?></strong>
                </div>

                <!-- BOTÃO -->
                <button class="btn btn-warning w-100">
                    Finalizar Compra
                </button>
            </div>

        </div>

    </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>




