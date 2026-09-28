<?php

    class Contact
    {
        public $name;
        public $email;
        public $phone;

        public function __construct($name, $email, $phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getPhone()
        {
            return $this->phone;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setPhone($phone)
        {
            $this->phone = $phone;
        }
    }

    $contact = new Contact(
        "Manoela",
        "manoela@email.com",
        "21999999999"
    );

    echo "Nome: " . $contact->getName() . "<br>";
    echo "E-mail: " . $contact->getEmail() . "<br>";
    echo "Telefone: " . $contact->getPhone() . "<br>";

    $contact->setEmail("novo@email.com");
    $contact->setPhone("21888888888");

    echo "<br>";
    echo "E-mail atualizado: " . $contact->getEmail() . "<br>";
    echo "Telefone atualizado: " . $contact->getPhone() . "<br>";
?>

