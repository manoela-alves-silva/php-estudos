<?php 

    class Animal {
        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au Au <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }
    }



    $frida = new Animal;

    echo "O nome do animal é: $frida->nome <br>";

    $frida->escolherNome("Frida");
    echo "O nome do animal é: $frida->nome <br>";

    $loki = new Animal;
    $loki->escolherNome("Loki");
    echo "O nome do animal é: $loki->nome <br>";

    $perola = new Animal;
    $perola->escolherNome("Pérola");
    echo "O nome do animal é: $perola->nome <br>";


    echo $loki->latir();
    
    echo $frida->latirForte();
?>