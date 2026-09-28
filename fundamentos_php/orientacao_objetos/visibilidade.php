<?php

    Class Car {
        public $rodas = 4; // public é visivel para todos.
        private $vidro = "Sem película"; // private é visivel apenas para a propria classe.
        protected $portas = 4; // protected é visivel para a propria classe e para as classes que herdam dela.


        public function peliculaDeFabrica($película){
             $this->vidro = $película;
        }

        public function getVidro(){
            return $this->vidro;
        }

            public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico{
        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelícula($carro, $película){
            $carro->vidro = $película;
        }
    }

    $carro = new Car;
    echo $carro->rodas . "<br>";


    $manoela = new Mecanico;
    $manoela->alterarRodas($carro);
    echo $carro->rodas . "<br>";

    //nao pode alterar pq é privado. 
    //$manoela->colocarPelícula($carro, "G20"); // nao pode alterar pq é privado.
    
   //$carro->peliculaDeFabrica("G10"); // pode alterar pq é publico.

    echo $carro->getVidro() . "<br>"; // pode alterar pq é privado, mas com metodo publico.

    // $carro->vidro = teste // nao pode alterar pq é privado.
   // echo $carro->portas . "<br>"; // nao pode alterar pq é protegido.

   echo $carro->getPortas() . "<br>"; // pode alterar pq é protegido, mas com metodo publico.