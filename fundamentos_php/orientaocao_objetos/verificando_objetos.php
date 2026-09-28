<?php 

    class Humano{

        public function falar(){
            echo "olá";
        }
    }

    $manu = new Humano;

    $teste = 10;

    // verifica se um objeto existe
    if(is_object($manu)){

        echo "É um objeto <br>";

    }else{
        echo "Não é um obejto <br>";
    }

    if(is_object($teste)){
        
        echo "É um objeto <br>";

    }else{
        echo "Não é um obejto <br>";
    }


    echo get_class($manu) . "<br>"; // verifica a qual classe esse objeto pertence. 

    
    // verifca se uma método existe
    if(method_exists($manu, "falar")){

        echo "Método existe";

    }else{
        echo "Método não existe";
    }

    if(method_exists($manu, "asd")){

        echo "Método existe";

    }else{
        echo "Método não existe";
    }

?>