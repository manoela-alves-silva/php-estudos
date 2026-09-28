<?php

    interface Carcteristicas {

        public function falar();
        
        const nome = "Manu";
    }

    class Humano implements Carcteristicas {

        public $idade = 22;

        public function falar() {
            echo "Olá, mundo!  <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }

    }

    
    $manu = new Humano;

    $manu->falar();

    $manu->dizerNome();
?>