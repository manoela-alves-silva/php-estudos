<?php

$dia = 'Nos démias dias';

switch ($dia) {
    case 'sábado':
        $oferta = '10% off em chocolate';
        break;
    case 'domingo':
        $oferta = '15% off em Nutella';
        break;

    case 'aniversariante':
        $oferta = '50% off em todos os produtos';
        break;

    default:
        $oferta = 'compre 1 produto e acumule pontos';

}
    echo $dia;
    echo "<br />";
    echo $oferta;


?>