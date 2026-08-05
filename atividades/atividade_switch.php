<?php

$valor = 100;
$categoria = "eletronicos";

function calcularDesconto($valor, $categoria) {

    // Verifica qual categoria foi enviada para a função
    switch ($categoria) {

        // Caso a categoria seja "eletrônicos"
        case "eletronicos":

            // Calcula 10% do valor do produto
            $desconto = $valor * 0.10;

            // Calcula o valor final após retirar o desconto
            $valorFinal = $valor - $desconto;

            // Retorna o valor com desconto
            return $valorFinal;


        // Caso a categoria seja "vestuário"
        case "vestuario":

            // Calcula 20% do valor do produto
            $desconto = $valor * 0.20;

            // Calcula o valor final
            $valorFinal = $valor - $desconto;

            // Retorna o valor com desconto
            return $valorFinal;


        // Caso a categoria seja "alimentos"
        case "alimentos":

            // Calcula 5% do valor do produto
            $desconto = $valor * 0.05;

            // Calcula o valor final
            $valorFinal = $valor - $desconto;

            // Retorna o valor com desconto
            return $valorFinal;


        // Se a categoria não existir
        default:

            // Não há desconto.
            // Retorna o próprio valor do produto.
            return $valor;
    }
}

// Chama a função e mostra o resultado
echo calcularDesconto($valor, $categoria);

?>