<?php
$itens = 10;
$custos = 50;

// custo real dos pedidos
$subtotal = $custos * $itens;

// conta para achar um preço para vender cada produto
$imposto = ($subtotal / 100) * 20; // '20' é a % do imposto.

$total = $subtotal + $imposto; // preço dos produtos com o imposto.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho — Amazon</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <header>
        <div class="logo">amazon<span>.br</span></div>
        <a href="#" class="cart-icon">
            🛒
            <span class="badge"><?= $itens ?></span>
        </a>
    </header>

    <main class="page">
        <h1 class="page-title">Meu Carrinho
            <span><?= $itens ?> ite<?= $itens > 1 ? 'ns' : 'm' ?></span>
        </h1>

        <div class="grid">
            <!-- ── COLUNA ESQUERDA: PRODUTOS ── -->
            <div class="card">
                <p class="card-title">Produtos selecionados</p>

                <div class="product">
                    <div class="product-thumb">📚</div>
                    <div class="product-info">
                        <p class="product-name">Livros</p>
                        <p class="product-meta">Vendido por Amazon.br · Frete grátis</p>
                        <div class="product-qty">Qtd: <?= $itens ?></div>
                    </div>

                    <div class="product-price">
                        $<?= number_format($subtotal, 2) ?>
                        <small>$<?= number_format($custos, 2) ?> / un.</small>
                    </div>
                </div>
            </div>

            <!-- ── COLUNA DIREITA: RESUMO ── -->
            <div class="card">
                <p class="card-title">Resumo da compra</p>

                <div class="summary-row">
                    <span class="label">Subtotal (<?= $itens ?> itens)</span>
                    <span class="value">$<?= number_format($subtotal, 2) ?></span>
                </div>

                <div class="summary-row">
                    <span class="label">Frete</span>
                    <span class="value" style="color:#2e7d32">Grátis</span>
                </div>

                <div class="summary-row">
                    <span class="label">Impostos (20%)</span>
                    <span class="value">$<?= number_format($imposto, 2) ?></span>
                </div>

                <div class="summary-total">
                    <span class="label">Total</span>
                    <span class="value">$<?= number_format($total, 2) ?></span>
                </div>

                <p class="tax-note">Impostos incluídos no valor final</p>

                <button class="btn-checkout">Finalizar Compra</button>

                <p class="secure-note">🔒 Pagamento 100% seguro</p>
            </div>

        </div>

    </main>
</body>
</html>