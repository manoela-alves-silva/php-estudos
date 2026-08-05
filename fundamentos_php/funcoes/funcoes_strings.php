<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    $texto = 'curso completo de php';

    //string to lower
    echo $texto. '<br />';
    echo strtolower($texto); // todos os caracteres serao convertidos para caixa baixa
    echo '<hr/>';

    //string to upper
    echo $texto. '<br />';
    echo strtoupper($texto); // transforma todos os caracteres da string em maiusculo
    echo '<hr/>';

    //upper case first
    echo $texto. '<br />';
    echo ucfirst($texto); // O primeiro carcter da string vai ficar maiuscilo, caso esteja minusculo
    echo '<hr/>';

    //string lenght
    echo $texto. '<br />';
    echo strlen($texto); // retona a quantidade de caracter que uma string tem
    echo '<hr/>';
    
    //string replace
    echo $texto. '<br />';
    echo str_replace('php', 'JavaScript', $texto); // substitui uma cadeia de caracteres por outra dentro de uma string
    echo '<br />';
    echo str_replace('.', ',', '22.20'); // é case-sensitive
    echo '<hr/>';
    
    //string 
    echo $texto. '<br />';
    //'Curso Completo de PHP'
    //0,1,2,3,4,5 ... 20
    echo substr($texto,0 ,14) . '...'; // permite 'recortar', 'retornar' parte de uma string
    echo '<hr/>';



    ?>
</body>

</html>