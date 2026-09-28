<?php

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor =  "vermelho";

        function ligar(){
            echo "Vruuuuuum <br>";
        }
    }


    $ferrari = new Car;

    // chamar a proriedade  
    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";


    //atribundo um valor diferente para o objeto
    $ferrari->cor = "azul";
    echo $ferrari->cor . "<br>";

    //chamar o método
    $ferrari->ligar();