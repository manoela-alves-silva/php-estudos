<?php

    class Pessoa {

        function falar(){
            echo "Olá, eu sou um objeto <br>";
        }
        
        function somar($x, $y){
            echo $x + $y . "<br>";
        }
    }


    $manoela = new Pessoa;

    $manoela->falar(); // Esse obejto vai executar o comportamento que o condigo que esta dentro do 'falar'. 
    $manoela->falar();


    $joao = new Pessoa;

    $joao->falar();

// dois objetos que compartilham da mesma classe sendo utilizados de maneira diferente;


    $manoela->somar(2, 2);
    $joao->somar(10, 12);