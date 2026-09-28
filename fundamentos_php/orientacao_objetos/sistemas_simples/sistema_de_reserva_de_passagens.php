<?php

class Passenger
{
    public $name;
    public $age;
    public $seatNumber;

    public function __construct($name, $age, $seatNumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }
}

$passenger = new Passenger("Manoela", 25, 15);

echo "Nome: " . $passenger->getName() . "<br>";
echo "Idade: " . $passenger->getAge() . "<br>";
echo "Assento: " . $passenger->getSeatNumber() . "<br>";

$passenger->setSeatNumber(20);

echo "Novo assento: " . $passenger->getSeatNumber() . "<br>";