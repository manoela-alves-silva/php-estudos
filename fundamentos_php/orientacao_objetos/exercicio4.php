<!--
    Crie uma class Carro;
    Crie algumas propriedades e também a propriedade velociade_maxima;
    Crie o método setVelocidadeMaxima, onde é possivel alterar a velocidade máxima do carro;
    e também o método getVecidadeMaxima onde é possivel imprimir a velocidade do carro.
-->

<?php 

    class Carro {
        public $marca; // propriedade pública;
        public $modelo;
        public $cor;
        private $velocidade_maxima;

        function setVelocidadeMaxima($velocidade) {
            $this->velocidade_maxima = $velocidade;
        } // método. 

        function getVelocidadeMaxima() {
            return $this->velocidade_maxima;
        }
    }

    $carro1 = new Carro;
    $carro1->marca = "Ferrari";
    $carro1->modelo = "F8 Tributo";
    $carro1->cor = "Vermelho";
    $carro1->setVelocidadeMaxima(340);

    echo "O carro é da marca: $carro1->marca <br>";
    echo "O modelo do carro é: $carro1->modelo <br>";
    echo "A cor do carro é: $carro1->cor <br>";
    echo "A velocidade máxima do carro é: " . $carro1->getVelocidadeMaxima() . " km/h <br>";


?>