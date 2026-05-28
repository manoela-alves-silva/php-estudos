<html>

<head>
    <meta charset="UTF-8">
    <title>Foreatech</title>
</head>

<body>

<?php
    $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $item) {
        echo "$item ";

        if($item == 'mesa'){
            echo ' (*Compre uma mesa e ganhe 25% de desconto em 4 cadeiras)';
        }
        echo '<br />';
    }
?>

</body>

</html>