<?php 

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }



    $manu = new Humano;

    $perola = new Animal;

    $carla = new Professor;


    if($manu instanceof Humano) {
        echo "Manu é um humano <br>";

    } else {
        echo "Manu não é um humano <br>";
    }
    

    if($perola instanceof Humano) {
        echo "Perola é um humano <br>";

    } else {
        echo "A pérola não é um humano <br>";
    }

    echo "<hr>";

    if($carla instanceof Professor) {
        echo "O Carla é um professor <br>";
    } else {
        echo "O Carla não é um professor <br>";
    }

    if($carla instanceof Humano) {
        echo "O Carla é um humano <br>";
    } else {
        echo "O Carla não é um humano <br>";
    }

    echo "<hr>";

    if($perola instanceof Professor) {
        echo "A pérola é um professor <br>";
    } else {
        echo "A pérola não é um professor <br>";
    }


?>