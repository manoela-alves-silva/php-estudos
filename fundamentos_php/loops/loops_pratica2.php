<html>

<head>
    <meta charset="UTF-8">
    <title>Prática - Foreatech</title>
</head>

<body>

    <?php

        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500, 'data_de_nascimento:' => '04-10-2003'),
            array('nome' => 'Maria', 'salario' => 3000),
            array('nome' => 'Carla', 'salario' => 5500)
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach ($funcionarios as $idx => $funcionario) {

            foreach ($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br />";
            }
                echo "<hr />";
        }
    ?>

</body>

</html>
