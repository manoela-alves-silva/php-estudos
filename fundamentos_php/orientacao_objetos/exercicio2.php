<!--
    Crie uma classe Cachorro;
    Crie o método latir e andar;
    Execute o método em novas instâncias da classe;
-->


<?php

    class Cachorro{

        function latir(){
            echo "Au au <br>";          
        }

        function andar($m){
            echo "O cachorro andou $m km <br>";          
        }
    }

    $viraLata = new Cachorro;
    $viraLata->latir();
    $viraLata->andar(7);


    $pastorAlemao = new Cachorro;
    $pastorAlemao->latir();
    $pastorAlemao->andar(4);