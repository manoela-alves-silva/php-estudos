<!-- Crie uma classe chamada Calculadora que tenha os seguintes métodos:
    somar(a, b): recebe dois números como parâmetros e retorna a soma deles.
    subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.
    multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.
    dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo
-->

<?php 

class Calculadora {

    public function somar($a, $b){
        return $a + $b;
    }

    public function subtrair($a, $b){
        return $a - $b;
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public function dividir($a, $b){
        return $a / $b;
    }
}

$calcular = new Calculadora;

echo $calcular->somar(2, 4) . "<br>";

echo $calcular->subtrair(10, 5) . "<br>";

echo $calcular->multiplicar(10, 6) . "<br>";

echo $calcular->dividir(50, 2);

?>
