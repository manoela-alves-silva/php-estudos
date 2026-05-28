<?php

$pacotes = 10;
$preco = 1.99;

?>

<h1>Preço por vários pacotes:  </h1>
<h3>Do While</h3>

<p>
    <?php
        do{
            echo $pacotes . " - ";
            echo "custo por pacote: ";
            echo $preco * $pacotes;
            echo "<br />";
            $pacotes--;

        } while($pacotes > 0);
    ?>
</p>
