<!-- 
    A funçao in_array verifica se um item passado por parametro está no array;
    O retorno é true se encontrar o item e false se nao encontrar;
    Vamos passar dois argumentos para a funçao, EX: in_array("item", $arr)
 -->



<?php

$arr = ['banana', 'maçã', 'batata', 'pêra', 'mamão'];

if (in_array("batata", $arr)) {
    echo "Há o item batata no array <br>";
} else {
    echo "Não há o item batata no array <br>";
}

// podemos fazer com valor de variavel 

$b = "banana";

if (in_array($b, $arr)) {
    echo "Há o item banana no array <br>";
} else {
    echo "Não há o item banana no array <br>";
}

?>