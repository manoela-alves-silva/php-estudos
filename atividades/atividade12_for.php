<h3>Testando o FOR</h3>

<?php

    $nome = "Manoela";

    // ESTRUTURA DO FOR: contador; condição; incremento/decremento
    for($i = 0; $i < 10; $i++){

        if($i == 4){
            echo "$nome <br>";
        }

        echo "Testando for $i <br>";
    }
?>

<hr>
<h3>Atividade com FOR</h3>
<p>Imprimir apenas números par</p>

<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    for($i = 0; $i < count($arr); $i++){

        if($arr[$i] % 2 == 0){
            echo "Numero: $arr[$i] <br>";
        }
    }
?>

<hr>
<h3>Atividade com FOR 2</h3>

<?php

    $array = [];

    for($i = 1; $i <= 10; $i++){
        array_push($array, $i);
    }

    print_r($array);

?>


<hr>
<h3>Atividade com FOR 3</h3>

<?php

$ar = [];

// Preenche o array com os números de 10 até 20
    for ($i = 10; $i <= 20; $i++) {
    array_push($ar, $i);
    }

// Mostra o array completo
    print_r($ar);

    echo "<br><br>";

// Percorre o array pelos índices
    for ($i = 0; $i < count($ar); $i++) {

        // Verifica se o VALOR do array é ímpar
        if ($ar[$i] % 2 != 0) {

            // Imprime o valor ímpar
            echo "Número ímpar: " . $ar[$i] . "<br>";
        }
    }
?>