<!-- Atividade: list

    Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, Automático;
    chame este array de $carro;
    Crie variáveis com base neste array.
-->

<?php

$carro = ['jaguar', 3.0, 'azul', 18, 'Teto solar', 'Automático'];
list($marca, $motor, $cor, $aro, $acessorio, $cambio) = $carro;

echo "Estou vendendo um carro da marca $marca. <br>";
echo "O montor é $motor. <br>";
echo "A cor do carro é $cor e está super conservado.<br>";
echo "O Aro do carro é $aro polegadas, ele possui $acessorio e o câmbio é $cambio.<br>";
?>

<!--  O jeito que eu resolvi fazer: eu resolvi "dificultar um pouco"   -->

<hr>

<!-- Correçao do professor -->

<?php

$carro2 = ['jaguar', 3.0, 'azul', 2018, 'Teto solar', 'Automático'];
list($marca2, $motor2, $cor2, $aro2, $opicional, $cambio2) = $carro2;

echo "$marca2 <br>";
echo "$motor2 <br>";
echo "$cor2 <br>";
echo "$aro2 <br>";
echo "$opicional <br>";
echo "$cambio2 <br>";
