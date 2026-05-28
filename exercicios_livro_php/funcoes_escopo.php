<!--
O escopo numa função no PHP define onde uma variável pode ser acessada.
Quando uma variável é criada numa função, ela normalmente só existe ali dentro. Isso é chamado escopo local.
Exemplo:
    function teste(){
    $nome = "Maria";
    echo $nome;
    }
    teste();
A variável $nome funciona apenas dentro da função.
-->

<!--
Já uma variável criada fora da função possui escopo global e não pode ser usada diretamente dentro da função sem autorização.
Exemplo:
    $idade = 20;
    function mostrar(){
        global $idade;
        echo $idade;
        }
    mostrar();
-->

<!--O escopo é importante porque ajuda a organizar o código, evitar conflitos entre variáveis e aumentar a segurança das informações dentro do programa.-->



<?php
$imposto = '10%';

    function calcular_total($preco, $quantidade){
        $custo = $preco * $quantidade; // preço vezes a quantidade de produto
        $imposto = $custo * (10 / 100); // para calcular o imposto q é de 20%
        $total = $preco + $imposto; // preço alterado, com os impostos inclusos
        return $total;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Escopo em Funções</title>

</head>

<body>
    <h1>Loja de maquiagem</h1>
    <p>Batton: $ <?= calcular_total(5, 10) ?></p>
    <p>Mascara para Cílios: $ <?= calcular_total(15, 4) ?></p>
    <p>Base a prova d'agua: $ <?= calcular_total(30, 8) ?></p>
    <p>Agua Micelar: $ <?= calcular_total(25, 7) ?></p>
    <p>Os impostos são de: <?= $imposto?></p>
</body>

</html>