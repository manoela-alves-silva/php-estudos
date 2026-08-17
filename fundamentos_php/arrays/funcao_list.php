<!--
    Com a funçao list podemos criar variaveis com base em um array;
    Ex: list($nome, $idade, $profissao) = $pessoa;
-->

<?php

list($nome, $idade, $profissao) = ['Manoela', 22, 'Programadora'];
echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Profissão: $profissao <br>";

?>

<hr>

<?php

$pessoa1 = ['Manoela', 22, 'Programadora'];
list($nome2, $idade2, $profissao2) = $pessoa1;

echo "Nome: $nome2 <br>";
echo "Idade: $idade2 <br>";
echo "Profissão: $profissao2 <br>";
?>