<html>

<head>
    <meta charset="UTF-8">
    <title>Percorrendo Arrays</title>
</head>

<body>
<?php

    $registros = array(
        array( 'título' => 'titulo noticia 1', 'conteúdo' => 'conteúdo noticia 1'),
        array( 'título' => 'titulo noticia 2', 'conteúdo' => 'conteúdo noticia 2'),
        array( 'título' => 'titulo noticia 3', 'conteúdo' => 'conteúdo noticia 3'),
        array( 'título' => 'titulo noticia 4', 'conteúdo' => 'conteúdo noticia 4')
    );
    echo '<br /><br /><br />';
    echo '<pre>';
    print_r($registros);
    echo '</pre>';
     // $idx = 0;

     // count -> conta a quantidade de elementos no array
    echo 'O arrey possui: ' .  count( $registros) . ' registros';
    echo '<br />';
    /*
    while($idx < count($registros)) {
        echo '<h3>'. $registros[$idx]['título'] . '</h3>';
        echo '<p>'. $registros[$idx]['conteúdo'] . '</p>';

        echo '<hr />';

        $idx++;
    } */

    /*
    do {
        echo '<h3>'. $registros[$idx]['título'] . '</h3>';
        echo '<p>'. $registros[$idx]['conteúdo'] . '</p>';

        echo '<hr />';

        $idx++;
    } while ( $idx < count($registros));
    */

    for ($idx = 0; $idx < count($registros); $idx++) {
        echo '<h3>'. $registros[$idx]['título'] . '</h3>';
        echo '<p>'. $registros[$idx]['conteúdo'] . '</p>';

        echo '<hr />';
    }

?>
</body>

</html>
