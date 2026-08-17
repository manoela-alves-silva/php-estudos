<!-- 
    Com a função compact podemos criar um array associativo a partir de variaveis;
    Passamos para a funçao o nome das variaveis em string;
    E então um novo array é criado, podemos atribuir a uma variavel. 
 -->


<?php

$nome = 'Manoela';
$sobrenome = 'Silva';
$idade = 22;
$estudante = true;

$nome_estudante = compact('nome', 'sobrenome', 'idade', 'estudante');

print_r($nome_estudante);

?>