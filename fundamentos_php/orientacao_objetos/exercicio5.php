<?php 

class Humano{
    public $idade = 29; // public é visível para todos.

    private $profissao = "Programador"; // private é visível apenas dentro da própria classe.
    public function chamarProfissao(){
        return $this->profissao;
    } // método publico para acessar a propriedade privada.

    public function Nome($nome){
        echo $nome . "<br>";
    }

    protected function altura(){
        echo '1.80 <br>'; // protected é visível para a própria classe e para as classes que herdam dela.
    }

    public function chamarAltura(){
        $this->altura();
    } // método público para acessar a propriedade protegida.

    public function falar(){
        echo "Olá, tudo bem? <br>";
    }
}

    class Professor extends Humano{
        public function chamarAlturaProfessor(){
            $this->chamarAltura();
        } // método público para acessar a propriedade protegida.

        protected function chamarInstituicao(){
            echo "UFF - Universidade Federal Fluminense <br>";
        }

        public function acessarInstituicaoProfessor(){
            $this->chamarInstituicao();
        }
    }


    $manu = new Humano;

    $manu->Nome("Manoela");
    $manu->falar();
    echo $manu->idade . "<br>";
    echo $manu->chamarProfissao() . "<br>";
    $manu->chamarAltura();


    echo "<hr>";


    $professor = new Professor;

    $professor->Nome("Matheus");
    $professor->falar();
    echo $professor->idade . "<br>";
    echo $professor->chamarProfissao() . "<br>";
    $professor->chamarAlturaProfessor();
    $professor->acessarInstituicaoProfessor();


?> 