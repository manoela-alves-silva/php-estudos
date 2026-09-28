<!-- 
    Crie uma classe Cachorro com propriedades
    Inicie as propriedades via construtor 
    Crie um método para exibir cada um das propriedades
-->


<?php 

    class Cachorro{
        public $nome;
        public $raca;
        public $idade;

        function __construct($nome, $raca, $idade)
        {
          $this->nome = $nome;
          $this->raca = $raca;
          $this->idade = $idade;
        }
    }


    $perola = new Cachorro("Pérola", "Salsicha", 20);
        echo "Eu tenho uma chachorra chamada $perola->nome, ela é da raça $perola->raca e tem $perola->idade anos. <br>" ;

?>