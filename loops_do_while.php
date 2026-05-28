<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $x = 1;
    // do while: garante a execusão de pelo menos uma vez, o conteúdo contido no seu bloco
    do {
        echo "X = $x <br />";
        $x++; //critério de parada
        //continue
        //break
    } while($x < 9);

    // echo '<br />';

    // while($x < 9 ) {
    //     echo 'Entrou no while';
    // }
    ?>
</body>

</html>