<?php

    include_once("menu.php"); // Quando não acha o ‘script’ que queremos adicionar era um warning.

    //require("menu.php"); // O require produz um fatal error

// A diferença do warning é que é apenas um alerta, o processamento do ‘script’ dá li em diante não é afetado.
// O fatal error interrompe completamente o funcionamento do ‘script’.

// Tem o mesmo comportamento dos demais, na situação de erro porem, o include_once e require_once permite a inclusão de um script apenas uma unica vez
?>

<?php

    include_once ("menu.php");

?>



Conteudo da página (inicio)
