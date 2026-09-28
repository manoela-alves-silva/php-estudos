<?php 

    class Humano {
        public $idade = 29; // public é visivel para todos.

        public function falar(){
            echo "Olá, tudo bem? <br>";
        }

        private function gritar(){
            echo "AHHHHHHHHHHHH <br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "oi, estou falando baixinho... <br>";
        }

        public function acessarFalarBaixinho(){
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {

        public function acessarFalarBaixinhoProgramador(){
            $this->falarBaixinho();
        }
    }

    $manu = new Humano;
    $manu->falar();
    $manu->acessarGritar();
    $manu->acessarFalarBaixinho();

    echo "<hr>";

    $matheus = new Programador;
    echo $matheus->idade . "<br>";
    $matheus->falar();
    $matheus->acessarGritar();
    $matheus->acessarFalarBaixinhoProgramador();
?>    