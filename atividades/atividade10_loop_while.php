
<h3>loop: While</h3>
<?php

    $arr = [1, 'manoela', 'joao', false, [], 1.55, true, 5, 100, 'maria'];

    $v1 = count($arr);
    $v2 = 0;

    while($v2 < $v1) {

        if(is_string($arr[$v2])) {
            echo $arr[$v2] . "<br>";
        }
        $v2++;


    }
?>

<hr>
<h3>Usando o break</h3>

<?php
// BREAK: para o loop quando adicionado no código.

    $x = 0;

    while($x < 10) {
        echo "O X é $x <br>";

        if($x === 5) {
            echo "Terminando o loop <br>";
            break;
        }

        $x++;

    }
?>


<hr>
<h3>Usando o continue</h3>

<?php
// CONTINUE: pula uma execução do loop.

    $a = 10;

    while($a > 0){

        if($a == 5 || $a == 7) {

            echo "Pulou a execução $a <br>";

            $a--;

            continue;
        }

        echo "Executando o loop $a <br>";

        $a--;

    }
?>

<hr>
<h3>Atividade</h3>

<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $i = 0;

    while($i < count($arr)) {

        $numeroAtual = $arr[$i];

        if($numeroAtual == 30 || $numeroAtual == 40) {

            $i++;

            continue;
        }

        echo "Elemento: $arr[$i] <br>";
        $i++;

    }


?>