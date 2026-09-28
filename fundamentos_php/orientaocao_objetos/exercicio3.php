<!-- 
    Crie uma classe Pessoa;
    Crie a propriedade nome e idade;
    E tambem um método andar. 
-->

<?php

    class Pessoa{
        
        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m km de bicicleta <br>";
        }
    }

    $manoela = new Pessoa;

    
    $manoela->nome = "Manoela";
    $manoela->idade = 22; // declarando a variavel que estava fazia.

    echo "O nome dela é $manoela->nome e ela tem $manoela->idade anos. <br>";

    $manoela->andar(5);


    echo "<hr>";

    $pedro = new Pessoa;

    $pedro->nome = "Pedro"; // declarando a variavel que estava fazia.
    $pedro->idade = 30;

    echo "O nome dele é $pedro->nome e ele tem $pedro->idade anos. <br>";
    
    $pedro->andar(10);