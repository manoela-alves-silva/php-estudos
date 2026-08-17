<!-- 
    A estrutura FOREACH com arrays, podemos iterar facilmente com ela;
    Utilizando s notaçao de chave => valor, temos acesso rápido também a arrays associativos;
    EX: foreach($itens as $key => value) {};
 -->


<?php

$manoela = [
    'nome' => 'Manoela Silva',
    'idade' => 22,
    'profissao' => 'estudante'
];


$tainara = [
    'nome' => 'Tainara Silva',
    'idade' => 22,
    'profissao' => 'Recepcionista'
];

foreach ($manoela as $pessoa => $value) {
    echo "$pessoa: $value <br>";
}

echo "<hr>";

foreach ($tainara as $pessoa2 => $value) {
    echo "$pessoa2: $value <br>";
}


?>