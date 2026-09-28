<?php

    $contador = 1;
    $pacotes = 10;
    $preco = 3.99;

?>

<h1>Preço por vários pacotes: </h1>
<h3>While</h3>

<p>
    <?php
        while($contador <= $pacotes){
            echo $contador . " - " ;
            echo "Custo por pacotes: " ;
            echo $preco * $contador; // multiplica os valores das variáveis e é escrito
            echo "<br />";

            $contador++;
        }
    ?>
</p>

