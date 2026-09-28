<?php
    $preco = 2.99
?>


<h2>Preço para grandes encomendas:</h2>
<h4>Loop: For </h4>

<?php
    for($i = 1; $i <= 20; $i++) {
        echo $i . " - ";
        echo "Custo por pacote: $";
        echo $preco * $i;
        echo "<br>";

    }
    echo '<hr />'
?>



<?php
    $valor = 1.99
?>

<h2>Desconto ao comprar vários doces:</h2>

<p>
    <?php
        for($i = 10; $i <= 200; $i = $i + 10 ) {
            echo $i . " - ";
            echo "Custo por pacote: $";
            echo $valor * $i;
            echo "<br>";
        }
    ?>
</p>
