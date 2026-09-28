<?php

    class Humano{

        public const OLHOS = 2;
        public const BRAÇOS = 2;
        public const PERNAS = 2;

        // em metedo é um pouco diferente.

        function mostrarConstantes(){

            echo "O Manoela tem " . self::OLHOS . " olhos.<br>";
            echo "O Manoela tem " . self::BRAÇOS . " braços.<br>";
            echo "O Manoela tem " . self::PERNAS . " pernas.<br>";
        }
    }

    
   


    echo "O Pedro tem " . Humano::OLHOS . " olhos.<br>";
    echo "O Pedro tem " . Humano::BRAÇOS . " braços.<br>";
    echo "O Pedro tem " . Humano::PERNAS . " pernas.<br>";  


    echo "<hr>";

    $manoela = new Humano;
    $manoela->mostrarConstantes();
?>