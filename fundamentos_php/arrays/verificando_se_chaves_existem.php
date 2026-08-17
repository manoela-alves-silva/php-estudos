<!-- 
    Com a funçao array_key_exists podemos verificar se ha um valor em resoctiva key de um array.
    Podemos fazer essa checagem com em um if;
    Ex: array_key_exists('marca', $carro) retorna true, pois a key 'marca' existe no array $carro.
    Outra funçao que podemos utilizar para este fim é a isset;
-->

<?php

echo "<h3>array_key_exists</h3>";

$arr = [
    'nome' => 'João',
    'idade' => 20,
];

if (array_key_exists('nome', $arr)) {

    echo "Essa chave existe no array <br>";
} else {

    echo "Essa chave não existe no array";
};

if (array_key_exists('profissao', $arr)) {

    echo "Essa chave existe no array <br>";
} else {

    echo "Essa chave não existe no array";
};

echo "<hr>";
echo "<h3>isset</h3>";

// isset: no if array com [];

if (isset($arr['nome'])) {

    echo "Essa chave existe no array ISSET <br>";
} else {

    echo "Essa chave não existe no array ISSET ";
};

if (isset($arr['profissao'])) {

    echo "Essa chave existe no array ISSET <br>";
} else {

    echo "Essa chave não existe no array ISSET ";
};


// O isset nao é só para arrays, podemos verificar se os valores estão presentes em algum lugar. Seja em uma variavel, array, etc. Ele retorna true se existir e false se não existir.;

echo "<hr>";
echo "<h3>isset - Variaves</h3>";

$x = 10;

if (isset($x)) {

    echo "Essa variavel existe <br>";
} else {

    echo "Essa variavel não existe";
}

if (isset($y)) {

    echo "Essa variavel existe <br>";
} else {

    echo "Essa variavel não existe";
}

?>